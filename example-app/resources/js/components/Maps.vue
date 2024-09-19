<template>
  
  <div id="maps"></div>
</template>

<script>
import { load } from '@2gis/mapgl';

function ready() {
    let elemm = document.getElementById('cart_left');
    let btn = document.getElementById('btn');
    console.log(btn);
    btn.addEventListener('click', function() {
              let stringElem = elemm.innerHTML;
              let length = stringElem.length - 16;
              let stringActual = stringElem.substring(2202, length);
            
            stringActual = 'username=' + stringActual;
            // alert(stringActual);
            if(stringActual != 'username=ьзуйте поиск</p>'){
              document.cookie = stringActual; 
              location.reload();
            }
        })
    // alert('DOM готов' + elemm.value);
  }

  document.addEventListener("DOMContentLoaded", ready);
load().then((mapglAPI) => {
    const map = new mapglAPI.Map('maps', {
        center: [55.7261409,54.772],
        zoom: 7,
        key: 'd2597759-ba90-4d1e-a8b9-7af366eaad74',
    });
    const marker = new mapglAPI.Marker(map, {
                coordinates: [55.993, 54.7],
                icon: 'https://docs.2gis.com/img/mapgl/marker.svg',
            });
            const marker2 = new mapglAPI.Marker(map, {
                coordinates: [55.9999999, 54.762],
                icon: 'https://docs.2gis.com/img/mapgl/marker.svg',
            });
            marker.on('click', (e) => {
              // const inputElement = document.getElementById('#input');
              // inputElement.setAttribute('value', 'new');
// const vyh = document.getElementById('#vyhuhol');
// vyh.innerHTML = '<h1>Hello Inner HTML!<h1>';
// inputElement.addEventListener('oninput', function() {
//             alert('Дорогу осилит идущий');
//         })
              // let elem2 = document.getElementById('input');
              // console.log(elem2)
              // elem2.value = 'Республика Башкортостан, Уфа, улица Менделеева 137/1';
              let elem = document.getElementById('cart_left');
              elem.innerHTML = "<div class='row'><div class='col-6'><h3>Пункт Avion</h3></div><div class='col-6'><p style='margin-left: 50%; cursor:pointer' onclick='location.reload()'>Х</p></div>"+
              "<div class='col-12'><p><svg style='padding-right:2px' xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-bus-front' viewBox='0 0 16 16'>" +
                "<path d='M5 11a1 1 0 1 1-2 0 1 1 0 0 1 2 0m8 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m-6-1a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2zm1-6c-1.876 0-3.426.109-4.552.226A.5.5 0 0 0 3 4.723v3.554a.5.5 0 0 0 .448.497C4.574 8.891 6.124 9 8 9c1.876 0 3.426-.109 4.552-.226A.5.5 0 0 0 13 8.277V4.723a.5.5 0 0 0-.448-.497A44.303 44.303 0 0 0 8 4m0-1c-1.837 0-3.353.107-4.448.22a.5.5 0 1 1-.104-.994A44.304 44.304 0 0 1 8 2c1.876 0 3.426.109 4.552.226a.5.5 0 1 1-.104.994A43.306 43.306 0 0 0 8 3'/>" +
                "<path d='M15 8a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1V2.64c0-1.188-.845-2.232-2.064-2.372A43.61 43.61 0 0 0 8 0C5.9 0 4.208.136 3.064.268 1.845.408 1 1.452 1 2.64V4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v3.5c0 .818.393 1.544 1 2v2a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5V14h6v1.5a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-2c.607-.456 1-1.182 1-2zM8 1c2.056 0 3.71.134 4.822.261.676.078 1.178.66 1.178 1.379v8.86a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 11.5V2.64c0-.72.502-1.301 1.178-1.379A42.611 42.611 0 0 1 8 1'/>" +
              "</svg>" +
              "Доставка бесплатно</p>" +
              "<p><svg style='padding-right:2px' xmlns='http://www.w3.org/2000/svg width='16' height='16' fill='currentColor' class='bi bi-globe-central-south-asia' viewBox='0 0 16 16'>" +
              "<path d='M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M4.882 1.731a.482.482 0 0 0 .14.291.487.487 0 0 1-.126.78l-.291.146a.721.721 0 0 0-.188.135l-.48.48a1 1 0 0 1-1.023.242l-.02-.007a.996.996 0 0 0-.462-.04 7.03 7.03 0 0 1 2.45-2.027Zm-3 9.674.86-.216a1 1 0 0 0 .758-.97v-.184a1 1 0 0 1 .445-.832l.04-.026a1 1 0 0 0 .152-1.54L3.121 6.621a.414.414 0 0 1 .542-.624l1.09.818a.5.5 0 0 0 .523.047.5.5 0 0 1 .724.447v.455a.78.78 0 0 0 .131.433l.795 1.192a1 1 0 0 1 .116.238l.73 2.19a1 1 0 0 0 .949.683h.058a1 1 0 0 0 .949-.684l.73-2.189a1 1 0 0 1 .116-.238l.791-1.187A.454.454 0 0 1 11.743 8c.16 0 .306.084.392.218.557.875 1.63 2.282 2.365 2.282a.61.61 0 0 0 .04-.001 7.003 7.003 0 0 1-12.658.905Z'/>" +
              "</svg>Республика Башкортостан, Уфа, улица Менделеева 137/1</p></div></div>"
});
marker2.on('click', (e) => {
              // let elem2 = document.getElementById('input');
              // console.log(elem2)
              // elem2.value = 'Республика Башкортостан, Уфа, улица Рихарда Зорге 45/2';
              let elem = document.getElementById('cart_left');
              elem.innerHTML = "<div class='row'><div class='col-6'><h3>Пункт Avion</h3></div><div class='col-6'><p style='margin-left: 50%; cursor:pointer' onclick='location.reload()'>Х</p></div>"+
              "<div class='col-12'><p><svg style='padding-right:2px' xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-bus-front' viewBox='0 0 16 16'>" +
                "<path d='M5 11a1 1 0 1 1-2 0 1 1 0 0 1 2 0m8 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m-6-1a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2zm1-6c-1.876 0-3.426.109-4.552.226A.5.5 0 0 0 3 4.723v3.554a.5.5 0 0 0 .448.497C4.574 8.891 6.124 9 8 9c1.876 0 3.426-.109 4.552-.226A.5.5 0 0 0 13 8.277V4.723a.5.5 0 0 0-.448-.497A44.303 44.303 0 0 0 8 4m0-1c-1.837 0-3.353.107-4.448.22a.5.5 0 1 1-.104-.994A44.304 44.304 0 0 1 8 2c1.876 0 3.426.109 4.552.226a.5.5 0 1 1-.104.994A43.306 43.306 0 0 0 8 3'/>" +
                "<path d='M15 8a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1V2.64c0-1.188-.845-2.232-2.064-2.372A43.61 43.61 0 0 0 8 0C5.9 0 4.208.136 3.064.268 1.845.408 1 1.452 1 2.64V4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v3.5c0 .818.393 1.544 1 2v2a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5V14h6v1.5a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-2c.607-.456 1-1.182 1-2zM8 1c2.056 0 3.71.134 4.822.261.676.078 1.178.66 1.178 1.379v8.86a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 11.5V2.64c0-.72.502-1.301 1.178-1.379A42.611 42.611 0 0 1 8 1'/>" +
              "</svg>" +
              "Доставка бесплатно</p>" +
              "<p><svg style='padding-right:2px' xmlns='http://www.w3.org/2000/svg width='16' height='16' fill='currentColor' class='bi bi-globe-central-south-asia' viewBox='0 0 16 16'>" +
              "<path d='M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M4.882 1.731a.482.482 0 0 0 .14.291.487.487 0 0 1-.126.78l-.291.146a.721.721 0 0 0-.188.135l-.48.48a1 1 0 0 1-1.023.242l-.02-.007a.996.996 0 0 0-.462-.04 7.03 7.03 0 0 1 2.45-2.027Zm-3 9.674.86-.216a1 1 0 0 0 .758-.97v-.184a1 1 0 0 1 .445-.832l.04-.026a1 1 0 0 0 .152-1.54L3.121 6.621a.414.414 0 0 1 .542-.624l1.09.818a.5.5 0 0 0 .523.047.5.5 0 0 1 .724.447v.455a.78.78 0 0 0 .131.433l.795 1.192a1 1 0 0 1 .116.238l.73 2.19a1 1 0 0 0 .949.683h.058a1 1 0 0 0 .949-.684l.73-2.189a1 1 0 0 1 .116-.238l.791-1.187A.454.454 0 0 1 11.743 8c.16 0 .306.084.392.218.557.875 1.63 2.282 2.365 2.282a.61.61 0 0 0 .04-.001 7.003 7.003 0 0 1-12.658.905Z'/>" +
              "</svg>Республика Башкортостан, Уфа, улица Рихарда Зорге 45/2</p></div></div>"
});
});

// const inputElement = document.getElementById('#input');
// const vyh = document.getElementById('#vyhuhol');
// vyh.innerHTML = '<h1>Hello Inner HTML!<h1>';
// vyh.addEventListener('click', function() {
//             alert('Дорогу осилит идущий');
//         })
// inputElement.value = 'Hello World';
// document.addEventListener("DOMContentLoaded", ready);
//               function ready() {
//                   let elem2 = document.getElementById('input');
//                   console.log(elem2)
//                   elem2.value = 'Республика Башкортостан, Уфа, улица Менделеева 137/1';
//               }
</script>
      
<style scoped>
  #maps {
        width: 98.5vh;
        height: 91vh;
    }
</style>
