document.addEventListener("DOMContentLoaded", () => {
  const dropMenu = document.querySelector(".drop__down");
  const dropBtn = document.querySelector(".drop__down__btn");

  dropBtn.addEventListener("click", () => {
    if (dropMenu.classList.contains("active")) {
      dropMenu.classList.remove("active");
    } else {
      dropMenu.classList.add("active");
    }
  });
  const info__content_1 = document.getElementById("info_content_1");
  const infoData = [
    "O’zida doimiy charchoq va holsizlik xis qiladiganlar",
    "Saraton kasalligini oldini olishni istaganlar",
    "Aqliy va jismoniy faoliyati pasayganlar",
    "Bemorlikdan keyin oyoqqa tezroq turishni xohlaganlar",
    "Jinsiy quvvati kamligidan aziyat chekadiganlar",
    "Immunitetni yaxshilab, kasalliklardan yiroq bo’lishni istaganlar",
    "Tana va bo’g’imlarda doimiy og’riq xis qiladiganlar",
    "Qarilikni sekinlashtirishni istaganlar",
    "Asabiy va stressga tez tushadiganlar",
    "Qon bosimi va qandli diabetni me’yorlashtirishni xohlovchilar",
  ];
  infoData.map((v, i) => {
    const newItem = document.createElement("div");
    newItem.className = `info__content__item bordered`;
    newItem.innerHTML = `
        <img src="./assets/icons/info${i + 1}.svg" alt="info-photo" />
              <p class="g__text">
               ${v}
              </p>
      `;
    info__content_1.appendChild(newItem);
  });
  //////////////////
  const info__content_2 = document.getElementById("info_content_2");

  const infoData2 = [
    "Immunitet ko’tarilib organizm energiyaga to’ladi",
    "Jinsiy funksional me’yorlashib quvvat ortadi",
    "Asab tizimlari yaxshilanib stressning oldi olinadi",
    "Charchoq va holsizlik yo’qolib harakatlar yengillashadi",
    "Qon bosimi me’yorlashib inson o’zini tetik xis qiladi",
    "Uyqu rejimi yaxshilanib uyquga ketish va uyg’onish osonlashadi",
    "Aqliy faoliyat yaxshilanib xotira kuchayadi",
    "Qarilikni sekinlashtirib organizmni yoshartiradi",
    "Jismoniy faoliyat ortib tana quvvatlanadi",
    "Tana va bo’g’imlardagi og’riqlar yo’qolib organizm tinchlanadi",
  ];
  infoData2.map((v, i) => {
    const newItem = document.createElement("div");
    newItem.className = `info__content__item`;
    newItem.innerHTML = `
        <img src="./assets/icons/info_2_${i + 1}.svg" alt="info-photo" />
              <p class="g__text">
               ${v}
              </p>
      `;
    info__content_2.appendChild(newItem);
  });
  const orderModal = document.getElementById("order_modal");
  const openModal = () => {
    if (orderModal.classList.contains("active")) {
      orderModal.classList.remove("active");
    } else {
      orderModal.classList.add("active");
    }
  };
  document
    .getElementById("header__button")
    .addEventListener("click", openModal);
  orderModal.addEventListener("click", openModal);
});
