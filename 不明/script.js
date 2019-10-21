function menseki(hankei){
return "半径"+hankei+"cmの円の面積は"+hankei*3.14+"です。"
}
document.write(menseki(5));
document.write("<br>");
document.write(menseki(7));
document.write("<br>");
document.write(menseki(10));

document.write("<br>");
document.write("<br>");
document.write("<br>");


function ryoukin(group,otona,kodomo){
return group+"グループの合計金額は"+(otona*500+kodomo*200)+"です。"
}
document.write(ryoukin("A",2,4));
document.write("<br>");
document.write(ryoukin("B",1,5));
document.write("<br>");
document.write(ryoukin("C",3,7));