<?php
/*

Attribute
Attribute adalah menambahkan metadata terhadap kode program yang kita buat.
Di bahasa pemrograman lain seperti Java fitur ini disebut Annotation, Attribute di C#, dan decorator di Python & Javascript.
More detail: 
• https://www.php.net/manual/en/language.attributes.php
• https://wiki.php.net/rfc/attributes

Menggunakan Attibute
Attibute bisa digunakan di berbagai tempat seperti di class, function, method, property, class constant, dan parameter.
Attribute menambahkan metadata atau informasi tambahan dari class attribute ke class, atau lainnya yang akan digunakan.
Untuk menggunakan attribute, cukup gunakan tanda #[nama_attribute] di target yang kita tentukan.

Attribute Target
Secara default, attribute bisa digunakan di semua target (class, function, property, dll).
Jika kita ingin membatasi hanya bisa digunakan di target tertentu, kita bisa tambahkan informasinya ketika membuat class attribute.

Attrbute Class
Attribute class adalah class biasa, kita bisa menambahkan property, function/method, dan constructor jika kita mau.
Cocok ketika kita butuh menambahkan informasi tambahan di attribute class.

*/

# Membuat class Attribute
// #[Attribute] 
# Attibute Target, attribute ini hanya dapat digunakan untuk property dan parameter
#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_PARAMETER)]
class NotBlank
{
    
}

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_PARAMETER)]
class Length
{
    public int $min;                                        # Menambahkan property di Attribute class
    public int $max;

    public function __construct(int $min, int $max)         # Menambahkan constructor di Attribute class
    {
        $this->min = $min;
        $this->max = $max;
    }
}

class LoginRequest
{
    #[Length(min: 4, max: 10)]      # Menggunakan attribute Length, dengan ketentuan minimal dan maksimal panjang string
    #[NotBlank]                     # Menggunakan attribute NotBlank. Menambahkan informasi tambahan (metadata) terhadap property
    public ?string $username;

    #[Length(min: 8, max: 10)]
    #[NotBlank]
    public ?string $password;
}

function validate(object $object): void                                             # Membaca Attribute via Reflection (1)
{
    $class = new ReflectionClass($object);  
    $properties = $class->getProperties();
    foreach ($properties as $property):
        validateNotBlank($property, $object);
        validateLength($property, $object);
    endforeach;
}

function validateNotBlank(ReflectionProperty $property, object $object): void       # Membaca Attribute via Reflection (1)
{
    $attributes = $property->getAttributes(NotBlank::class);                        # Ambil property yang berattribute NotBlank
    if (count($attributes) > 0):
        if (!$property->isInitialized($object))
            throw new Exception("Property $object->name is null");
        if ($property->getValue($object) == null)
            throw new Exception("Property $object->name is null");
    endif;
}

function validateLength(ReflectionProperty $property, object $object): void
{
    if (!$property->isInitialized($object) || $property->getValue($object) == null)
        return; # cancel validation

    $value = $property->getValue($object);
    $attributes = $property->getAttributes(Length::class);
    foreach ($attributes as $attribute)                                 # validasi panjang property
    {
        $length = $attribute->newInstance();                            # membuat object dari Length dengan constructor argument yang dipasangkan pada property -> #[Length(min: 4, max: 10)], #[Length(min: 8, max: 10)]
        $valueLength = strlen($value);
        if ($valueLength < $length->min)
            throw new Exception("Property $property->name size is too short");
        if ($valueLength > $length->max)
            throw new Exception("Property $property->name size is too long");
    }
}

$request = new LoginRequest();
$request->username = "user";
$request->password = "pass";
validate($request);                 # validsi object LoginRequest yang di dalamnya mengecek menggunakan reflection untuk properti beratttribute NotBlank dan Length




