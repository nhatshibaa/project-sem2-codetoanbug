<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('chooseCity').onchange = function () {
            loadDistrict(this.value);
        }
        document.getElementById('chooseDistrict').onchange = function () {
            loadWard(this.value);
        }
        // load thanh pho
        loadCity();
        function loadWard(districtId) {
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    console.log(xhr.responseText);
                    const listWard = JSON.parse(xhr.responseText);
                    let wardContent = '';
                    for (let i = 0; i < listWard.length; i++) {
                        const district = listWard[i];
                        wardContent += `<option value="${district.xaid}">${district.name}</option>`;
                    }
                    document.getElementById('chooseWard').innerHTML = wardContent;
                }
            }
            xhr.open('GET', `/location/ward?districtId=${districtId}`, false);
            xhr.send();
        }
        function loadDistrict(cityId) {
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    console.log(xhr.responseText);
                    const listDistrict = JSON.parse(xhr.responseText);
                    let districtContent = '';
                    for (let i = 0; i < listDistrict.length; i++) {
                        const district = listDistrict[i];
                        districtContent += `<option value="${district.maqh}">${district.name}</option>`;
                    }
                    document.getElementById('chooseDistrict').innerHTML = districtContent;
                    loadWard(document.getElementById('chooseDistrict').value);
                }
            }
            xhr.open('GET', `/location/district?cityId=${cityId}`, false);
            xhr.send();
        }
        function loadCity() {
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    console.log(xhr.responseText);
                    const listCity = JSON.parse(xhr.responseText);
                    let cityContent = '';
                    for (let i = 0; i < listCity.length; i++) {
                        const city = listCity[i];
                        cityContent += `<option value="${city.matp}">${city.name}</option>`;
                    }
                    document.getElementById('chooseCity').innerHTML = cityContent;
                    loadDistrict(document.getElementById('chooseCity').value);
                }
            }
            xhr.open('GET', '/location/city', false);
            xhr.send();
        }
    })
</script>
