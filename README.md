# Pembelajaran OOP di PHP

Proyek ini bertujuan untuk memberikan pemahaman dasar tentang Pemrograman Berorientasi Objek (OOP) di PHP melalui contoh sederhana.

## Konsep-konsep Dasar OOP

### 1. Class dan Object

- **Class** adalah blueprint atau template untuk membuat object. Class mendefinisikan properties dan methods yang akan dimiliki oleh object.
- **Object** adalah instance dari sebuah class. Setiap object dapat memiliki nilai properties yang berbeda.

Contoh class `Car`:

```php
class Car {
    public $brand;
    public $model;
    public $color;

    public function __construct($brand, $model, $color) {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }

    public function getDetails() {
        return "This car is a " . $this->color . " " . $this->brand . " " . $this->model . ".";
    }
}
```
## Inheritance

-Inheritance memungkinkan sebuah class untuk mewarisi properties dan methods dari class lain.

Contoh class ElectricCar yang mewarisi class Car:

```bash
class ElectricCar extends Car {
    public $batteryCapacity;

    public function __construct($brand, $model, $color, $batteryCapacity) {
        parent::__construct($brand, $model, $color);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function getDetails() {
        return parent::getDetails() . " It has a battery capacity of " . $this->batteryCapacity . " kWh.";
    }
}
```

## Constructor
- Constructor adalah method khusus yang akan dipanggil saat sebuah object dibuat. Constructor digunakan untuk menginisialisasi properties dari object.
Contoh penggunaan constructor pada class Car:

```bash
public function __construct($brand, $model, $color) {
    $this->brand = $brand;
    $this->model = $model;
    $this->color = $color;
}
```

## Overriding

- Overriding memungkinkan sebuah subclass untuk menyediakan implementasi spesifik dari method yang sudah didefinisikan di superclass.
Contoh overriding method <code>getDetails</code> di <code>class ElectricCar</code>:
```bash
public function getDetails() {
    return parent::getDetails() . " It has a battery capacity of " . $this->batteryCapacity . " kWh.";
}
```

## Contoh Penggunaan
File <code>index.php</code> menunjukkan bagaimana menggunakan class Car dan ElectricCar:

```bash
require_once 'classes/Car.php';
require_once 'classes/ElectricCar.php';

$car = new Car('Toyota', 'Corolla', 'Red');
$electricCar = new ElectricCar('Tesla', 'Model 3', 'Black', 75);

echo $car->getDetails();
echo "\n";
echo $electricCar->getDetails();
```

## Cara Menjalankan
1. Pastikan Anda memiliki PHP terinstal di komputer Anda.
2. Clone repository ini.
3. Buka terminal dan navigasi ke direktori proyek.
4. Jalankan <code>php index.php</code> untuk melihat outputnya.

```bash
php index.php
```
