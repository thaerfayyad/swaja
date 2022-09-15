async function get() {
  const response = await fetch(
    "https://api.swajaksa.com/wc-api/v3/products/?filter[limit]=-1&consumer_key=ck_264616ae493ae9189bf8c6b5098a56e587e62536&consumer_secret=cs_2f25d4058a2fd36cfb23e17a5a6d6a985300dabb"
  );
  const data = await response.json();
  console.log(data.products);
  // console.log(data.products[0].images[0].src);
  // console.log(data.products[0].price_html);
  // console.log(data.products[1].title);
  console.log(data.products[0].categories);
  console.log(data.products[0].tags);
  console.log(data.products.length);

  // Meals
  // #1040
  document.querySelector("#images_1040").src = data.products[28].images[0].src;
  document.querySelector("#price_html_1040").innerHTML =
    data.products[28].price_html;
  document.querySelector("#title_1040").innerHTML = data.products[28].title;
  // #1041
  document.querySelector("#images_1041").src = data.products[27].images[0].src;
  document.querySelector("#price_html_1041").innerHTML =
    data.products[27].price_html;
  document.querySelector("#title_1041").innerHTML = data.products[27].title;
  // #1042
  document.querySelector("#images_1042").src = data.products[26].images[0].src;
  document.querySelector("#price_html_1042").innerHTML =
    data.products[26].price_html;
  document.querySelector("#title_1042").innerHTML = data.products[26].title;
  // #1043
  document.querySelector("#images_1043").src = data.products[25].images[0].src;
  document.querySelector("#price_html_1043").innerHTML =
    data.products[25].price_html;
  document.querySelector("#title_1043").innerHTML = data.products[25].title;

  // Burger
  // #1044
  document.querySelector("#images_1044").src = data.products[24].images[0].src;
  document.querySelector("#price_html_1044").innerHTML =
    data.products[24].price_html;
  document.querySelector("#title_1044").innerHTML = data.products[24].title;
  // #1045
  document.querySelector("#images_1045").src = data.products[23].images[0].src;
  document.querySelector("#price_html_1045").innerHTML =
    data.products[23].price_html;
  document.querySelector("#title_1045").innerHTML = data.products[23].title;
  // #1046
  document.querySelector("#images_1046").src = data.products[22].images[0].src;
  document.querySelector("#price_html_1046").innerHTML =
    data.products[22].price_html;
  document.querySelector("#title_1046").innerHTML = data.products[22].title;
  // #1047
  document.querySelector("#images_1047").src = data.products[21].images[0].src;
  document.querySelector("#price_html_1047").innerHTML =
    data.products[21].price_html;
  document.querySelector("#title_1047").innerHTML = data.products[21].title;
  // #1069
  document.querySelector("#images_1069").src = data.products[2].images[0].src;
  document.querySelector("#price_html_1069").innerHTML =
    data.products[2].price_html;
  document.querySelector("#title_1069").innerHTML = data.products[2].title;
  // #1071
  document.querySelector("#images_1071").src = data.products[0].images[0].src;
  document.querySelector("#price_html_1071").innerHTML =
    data.products[0].price_html;
  document.querySelector("#title_1071").innerHTML = data.products[0].title;

  // Tortela
  // #1048
  document.querySelector("#images_1048").src = data.products[20].images[0].src;
  document.querySelector("#price_html_1048").innerHTML =
    data.products[20].price_html;
  document.querySelector("#title_1048").innerHTML = data.products[20].title;
  // #1049
  document.querySelector("#images_1049").src = data.products[19].images[0].src;
  document.querySelector("#price_html_1049").innerHTML =
    data.products[19].price_html;
  document.querySelector("#title_1049").innerHTML = data.products[19].title;
  // #1050
  document.querySelector("#images_1050").src = data.products[18].images[0].src;
  document.querySelector("#price_html_1050").innerHTML =
    data.products[18].price_html;
  document.querySelector("#title_1050").innerHTML = data.products[18].title;
  // #1051
  document.querySelector("#images_1051").src = data.products[17].images[0].src;
  document.querySelector("#price_html_1051").innerHTML =
    data.products[17].price_html;
  document.querySelector("#title_1051").innerHTML = data.products[17].title;

  // Appetizers
  // #1052
  document.querySelector("#images_1052").src = data.products[30].images[0].src;
  document.querySelector("#price_html_1052").innerHTML =
    data.products[30].price_html;
  document.querySelector("#title_1052").innerHTML = data.products[30].title;
  // #1053
  document.querySelector("#images_1053").src = data.products[16].images[0].src;
  document.querySelector("#price_html_1053").innerHTML =
    data.products[16].price_html;
  document.querySelector("#title_1053").innerHTML = data.products[16].title;
  // #1054
  document.querySelector("#images_1054").src = data.products[15].images[0].src;
  document.querySelector("#price_html_1054").innerHTML =
    data.products[15].price_html;
  document.querySelector("#title_1054").innerHTML = data.products[15].title;
  // #1055
  document.querySelector("#images_1055").src = data.products[14].images[0].src;
  document.querySelector("#price_html_1055").innerHTML =
    data.products[14].price_html;
  document.querySelector("#title_1055").innerHTML = data.products[14].title;
  // #1070
  document.querySelector("#images_1070").src = data.products[1].images[0].src;
  document.querySelector("#price_html_1070").innerHTML =
    data.products[1].price_html;
  document.querySelector("#title_1070").innerHTML = data.products[1].title;
  // #1056
  document.querySelector("#images_1056").src = data.products[29].images[0].src;
  document.querySelector("#price_html_1056").innerHTML =
    data.products[29].price_html;
  document.querySelector("#title_1056").innerHTML = data.products[29].title;

  // Fries
  // #1057
  document.querySelector("#images_1057").src = data.products[13].images[0].src;
  document.querySelector("#price_html_1057").innerHTML =
    data.products[13].price_html;
  document.querySelector("#title_1057").innerHTML = data.products[13].title;
  // #1058
  document.querySelector("#images_1058").src = data.products[12].images[0].src;
  document.querySelector("#price_html_1058").innerHTML =
    data.products[12].price_html;
  document.querySelector("#title_1058").innerHTML = data.products[12].title;
  // #1059
  document.querySelector("#images_1059").src = data.products[11].images[0].src;
  document.querySelector("#price_html_1059").innerHTML =
    data.products[11].price_html;
  document.querySelector("#title_1059").innerHTML = data.products[11].title;
  // #1060
  //   document.querySelector("#images_1060").src = data.products[111].images[0].src;
  //   document.querySelector("#price_html_1060").innerHTML =
  //     data.products[111].price_html;
  //   document.querySelector("#title_1060").innerHTML = data.products[111].title;

  // Kids Meals
  // #1061
  document.querySelector("#images_1061").src = data.products[10].images[0].src;
  document.querySelector("#price_html_1061").innerHTML =
    data.products[10].price_html;
  document.querySelector("#title_1061").innerHTML = data.products[10].title;

  // Drinks
  // #1062
  document.querySelector("#images_1062").src = data.products[9].images[0].src;
  document.querySelector("#price_html_1062").innerHTML =
    data.products[9].price_html;
  document.querySelector("#title_1062").innerHTML = data.products[9].title;
  // #1063
  document.querySelector("#images_1063").src = data.products[8].images[0].src;
  document.querySelector("#price_html_1063").innerHTML =
    data.products[8].price_html;
  document.querySelector("#title_1063").innerHTML = data.products[8].title;
  // #1064
  document.querySelector("#images_1064").src = data.products[7].images[0].src;
  document.querySelector("#price_html_1064").innerHTML =
    data.products[7].price_html;
  document.querySelector("#title_1064").innerHTML = data.products[7].title;
  // #1065
  document.querySelector("#images_1065").src = data.products[6].images[0].src;
  document.querySelector("#price_html_1065").innerHTML =
    data.products[6].price_html;
  document.querySelector("#title_1065").innerHTML = data.products[6].title;
  // #1066
  document.querySelector("#images_1066").src = data.products[5].images[0].src;
  document.querySelector("#price_html_1066").innerHTML =
    data.products[5].price_html;
  document.querySelector("#title_1066").innerHTML = data.products[5].title;

  // DesSert
  // #1067
  document.querySelector("#images_1067").src = data.products[4].images[0].src;
  document.querySelector("#price_html_1067").innerHTML =
    data.products[4].price_html;
  document.querySelector("#title_1067").innerHTML = data.products[4].title;
  // #1068
  document.querySelector("#images_1068").src = data.products[3].images[0].src;
  document.querySelector("#price_html_1068").innerHTML =
    data.products[3].price_html;
  document.querySelector("#title_1068").innerHTML = data.products[3].title;
  // #1140
  // document.querySelector("#images_1140").src = data.products[31].images[0].src;
  // document.querySelector("#price_html_1140").innerHTML =
  //   data.products[31].price_html;
  // document.querySelector("#title_1140").innerHTML = data.products[31].title;
}
get();
