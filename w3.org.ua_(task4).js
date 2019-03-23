"use strict";
//ЗАДАЧИ НА МАССИВЫ В JAVASCRIPT
//http://w3.org.ua/js/zadachi-na-massivyi-v-javascript/
//
// Задание 1. Дан массив mas. Выведите его на страницу HTML в формате индекс
// элемента — значение (через три дефиса). Каждый элемент с новой строки.

//var mas1 = [15,'hello','trump',23,'world',999,176];

document.write("</br>Задание 1</br>");
var mas = [2, 3, 4, 5, 6, 4, 77, 32, 4];
for (var i = 0; i < mas.length; i ++) {
    document.write(i + ' - ' + mas[i] + '<br>');
}

// Задание 2. Дан массив mas. Выведите его на страницу HTML в формате индекс
// элемента — значение (через дефис). Каждый элемент с новой строки.
//     Выводить нужно те элементы, значение которых больше пяти (5).

document.write("</br></br>Задание 2</br>");
var mas1 = [2, 3, 4, 5, 6, 4, 77, 32, 4, 76, 555, 777, 666];
for (var j = 0; j < mas1.length; j ++) {
    if(j>5) {
        document.write(j + ' - ' + mas1[j] + '<br>');
    }
}

//ЗАДАЧИ НА АССОЦИАТИВНЫЕ МАССИВЫ В JS
//http://w3.org.ua/js/zadachi-na-assotsiativnyie-massivyi-v-js/

var mass = {
    "name" : "Vasiliy",
    "age" : 77,
    "gender" : "man",
    "number" : 777,
};
console.log(mass);

// Задание 2. Создайте ассоциативный массив содержащий описание человека.
//     Задайте поля: имя, возраст, пол, индивидуальный номер. Заполните массив. Выведите его в консоли.
//
//     Добавьте в массив метод, который будет рассчитывать год рождения человека
// исходя из его возраста и возвращать его.

var mass1 = {
    "name" : "Vasiliy",
    "age" : 77,
    "gender" : "man",
    "number" : 777,
    "year" : function () {
        return 2019 - this.age
    }
};
console.log(mass1.year());

// Задание 3. Создайте ассоциативный массив свойство mas
// которое содержит массив чисел (любого количества),
// добавьте метод, который выводит сумму чисел содержащихся в mas.

var mass2 = [5, 10, 15, 20, 27];
function arraySum(array) {
    var sum = 0;
    for (var i = 0; i < array.length; i++) {
        sum += array[i];
    }
    console.log(sum);
}
arraySum(mass2);

// Задание 4. Создайте массив, ключами которого служат артикулы товара
// (любое пятизначное число), а значениями – ассоциативный массив, который
// содержит название товара, стоимость, вес единицы товара, ссылку на изображение,
//     отметку о доступности товара на складе.
//
//     Выведите массив в консоль. Выведите на
// страницу HTML описание первого товара.


var shop = {
    "12340" :{
        "name" : "Xiaomi Redmi 4 Prime",
        "price" : 3500,
        "weight" : "156 g",
        "img" : "https://i1.rozetka.ua/goods/1787150/xiaomi_redmi_4_332_sl_eu_images_1787150598.jpg",
        "availability" : "no",
    },
    "12341" :{
        "name" : "Xiaomi Mi 8 Lite",
        "price" : 6499,
        "weight" : "169 g",
        "img" : "https://i1.rozetka.ua/goods/8088872/xiaomi_mi8_lite_6_64gb_space_gray_images_8088872871.jpg",
        "availability" : "yes",
    },
    "12342" :{
        "name" : "Xiaomi Redmi 6A",
        "price" : 2799,
        "weight" : "161 g",
        "img" : "https://i2.rozetka.ua/goods/8493864/copy_xiaomi_redmi_6a_2_16gb_grey_eu_5be17baf2499d_images_8493864216.jpg",
        "availability" : "yes",
    },
    "12343" :{
        "name" : "Xiaomi Mi A1",
        "price" : 4299,
        "weight" : "164 g",
        "img" : "https://i2.rozetka.ua/goods/4214051/xiaomi_mi_a1_4_32g_black_eur_images_4214051664.jpg",
        "availability" : "yes",
    },
};
console.log(shop);

var element = "";
for ( var key in shop) {
    element += "Название: "+shop[key].name + "<br>";
    element += "Цена: "+shop[key].price + "<br>";
    element += "Наличие: "+shop[key].availability + "<br>";
    element += '<img src=" '+shop[key].img+'">';
    element += '<hr>';
}
document.getElementById("element").innerHTML = element;

//Задание 5. Дан ассоциативный массив. Выведите его на страницу html в формате ключ — значение. Каждый элемент с новой строки.
var day = {
    "d1" : "Понедельник",
    "d2" : "Вторник",
    "d3" : "Среда",
    "d4" : "Четверг"
};
var out = "";
{
    out += "d1 - "+ 'Понедельник' + "<br>";
    out += "d2 - "+ 'Вторник' + "<br>";
    out += "d3 - "+ 'Среда' + "<br>";
    out += "d4 - "+ 'Четверг' + "<br>";
}
document.getElementById("out").innerHTML = out;


// Задание 6. Дан ассоциативный массив. Выведите его на страницу html в формате ключ *** значение. Каждый элемент с новой строки.
var arr = {
    "k1" : "17w4",
    "k2" : "1sfsg7",
    "k3" : "17nd",
    "k16" : "1237",
    "k14" : "1w37",
    "3k1" : "1wrw7"
};

var out1 = "";
{
    out1 += "k1 *** "+ '17w4' + "<br>";
    out1 += "k2 *** "+ '1sfsg7' + "<br>";
    out1 += "k3 *** "+ '17nd' + "<br>";
    out1 += "k16 *** "+ '1237' + "<br>";
    out1 += "k14 *** "+ '1w37' + "<br>";
    out1 += "3k1 *** "+ '1wrw7' + "<br>";
}
document.getElementById("out1").innerHTML = out1;


//Задание 8. Дан массив товаров, выведите товары на страницу цены которых больше 20
document.write("</br>Задание 8</br>");
var goodss = {
    "dd" : {
        "name": "Яблоки",
        "cost": 13
    },
    "dc" : {
        "name": "Груши",
        "cost": 23
    },
    "cd" : {
        "name": "Абрикосы",
        "cost": 33
    },
    "dee" : {
        "name": "Сливы",
        "cost": 43
    },
    "dd2" : {
        "name": "Вишни",
        "cost": 19
    },
};
for (var key1 in goodss){
    if(goodss[key1].cost > 20){
        document.write(goodss[key1].name + " ");
    }
}

//Задание 9. Дан массив товаров, выведите товары на страницу HTML, цены которых лежат в диапазоне от 220 до 300 и количество (amount) больше 200
document.write("</br></br>Задание 9</br>");
var goods = {
    "apple" : {
        "name": "Яблоки",
        "cost": 230,
        "amount":300
    },
    "pear" : {
        "name": "Груши",
        "cost": 324,
        "amount":100
    },
    "apricot" : {
        "name": "Абрикосы",
        "cost": 253,
        "amount":170
    },
    "plum" : {
        "name": "Сливы",
        "cost": 221,
        "amount":250
    },
    "cherry" : {
        "name": "Вишни",
        "cost": 20,
        "amount":312
    },
    "test" : {
        "name" : "test",
        "cost" : 234,
        "amount" : 234
    }
};

for (var key in goods) {
    if (goods[key].cost > 220 &&
        goods[key].cost < 300,
        goods[key].amount > 200) {
    document.write(goods[key].name + " ");
    //console.log(goods[key].name);
    }
}

