class UberBlack extends Car {
    constructor(license, driver, typeCarAccepted, seatsMaterial) {
        super(license, driver)
        this.brand = typeCarAccepted;
        this.model = seatsMaterial;
    }
}