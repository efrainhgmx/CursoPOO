package Java;

class Main {
    public static void main(String[] args) {
        System.out.println("Hola de nuevo");
        UberX uberX = new UberX("AMW123", new Account("Andres Herrera", "AND123"), "Ford", "Fiesta");
        uberX.setPassenger(4);
        uberX.printDataCar();

        UberVan uberVan = new UberVan("FGHY89", new Account("Andres Emiliano", "EMZ478"));
        uberVan.setPassenger(6);
        uberVan.printDataCar();

        /* Car car2 = new Car("QRK425", new Account("Andrea Herrera", "ANDA876"));
        car2.passenger = 2;
        car2.printDataCar(); */


    }
}