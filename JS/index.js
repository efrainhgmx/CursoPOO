var car = new Car("AWS456", new Account("Andres Herrera", "QST589"));
car.passenger = 4;
car.printDataCar();

var uberX = new UberX("AWS567", new Account("Andrea Herrera", "QWE456"));
uberX.passenger = 4;
uberX.printDataCar();

var user = new User(new Account("Maria Leon", "MLO908"));
user.email = "maleon@correo.com";
user.password = "mleonuber345";

user.printDataAccount();
