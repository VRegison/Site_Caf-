var cafesFortal = [
    {
        lat: -3.7424065,
        long: -38.495897,
        desc: "Coffees and More - Well-Selected Beans Pleasant Atmosphere, Tasty Drinks Menu and Varied Delicacies. try it"
    },
    {
        lat: -3.7340967,
        long: -38.4985553,
        desc: "Sandra Silvestre Cafés Especiais - On-site meal · Pickup at the door · Contactless delivery"
    },
    {
        lat: -3.7416301,
        long: -38.502392,
        desc: "Amika Coffeehouse - Coffee shop featuring strained and French press coffee, sweets and chocolate cakes, in a quiet atmosphere."
    },
    {
        lat: -3.7272127,
        long: -38.5178441,
        desc: "Roast coffee -(Without description)"
    },
    {
        lat: -3.7326039,
        long: -38.5246693,
        desc: "Vregison Coffee - (Without description)"
    },
    {
        lat: -3.7266863,
        long: -38.5292807,
        desc: 'Tiamate Coffee - Variety of classic drinks and options with a touch of chocolate and vanilla, in a coffee shop with cakes and sweets.       '
    },
    {
        lat: -3.7308286,
        long: -38.5122804,
        desc: 'Tiamate Coffee - Variety of classic drinks and options with a touch of chocolate and vanilla, in a coffee shop with cakes and sweets.       '
    },
    {
        lat: -3.734215,
        long: -38.5149671,
        desc: 'Tiamate Coffee - Variety of classic drinks and options with a touch of chocolate and vanilla, in a coffee shop with cakes and sweets.       '
    },
    {
        lat: -3.7349664,
        long: -38.504452,
        desc: 'Tiamate Coffee - Variety of classic drinks and options with a touch of chocolate and vanilla, in a coffee shop with cakes and sweets.       '
    },


];
var map = L.map('map').setView([-3.734215, -38.5122804], 14);

var coffeIcon = L.icon({
    iconUrl: `../assets/coffee-cup.png`,

    iconSize: [30, 35], // size of the icon
    shadowSize: [50, 64], // size of the shadow
    iconAnchor: [22, 90], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
});


L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

cafesFortal.map((item) => {
    L.marker([item.lat, item.long], { icon: coffeIcon }).addTo(map)
        .bindPopup(item.desc)

})