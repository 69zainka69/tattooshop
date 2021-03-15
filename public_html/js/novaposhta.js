class NovaPoshta {
    constructor(apiKey) {
        this.apiKey = apiKey;
    }
    fetch(data) {
        return $.post({
            async: true,
            crossDomain: true,
            url: `https://api.novaposhta.ua/v2.0/json/`,
            data: JSON.stringify(data),
        })
    }
    fetchCities() {
        return this.fetch({
            modelName: "Address",
            calledMethod: "getCities",
            methodProperties: {},
            apiKey: this.apiKey
        });
    }
    fetchWarehousesByCityRef(cityRef) {
        return this.fetch({
            modelName: "AddressGeneral",
            calledMethod: "getWarehouses",
            methodProperties: {
                Language: "ru",
                CityRef: cityRef,
            },
            apiKey: this.apiKey
        });
    }
    async fetchCityByRef(cityRef) {
        const response = await this.fetch({
            modelName: "Address",
            calledMethod: "getCities",
            methodProperties: {
                Ref: cityRef
            },
            apiKey: this.apiKey
        });
        try {
            return response.data[0];
        } catch {
            return null;
        }
    }
    async fetchWarehouseByRef(cityRef, warehouseRef) {
        const response = await this.fetch({
            modelName: "AddressGeneral",
            calledMethod: "getWarehouses",
            methodProperties: {
                Language: "ru",
                CityRef: cityRef,
            },
            apiKey: this.apiKey
        });
        return response.data.find(warehouse => warehouse.Ref === warehouseRef);
    }
}
