<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>دیتابیس اساتید پارسیان</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="webfonts/vazir/UI/Vazirmatn-UI-font-face.css">
  <script>
    const form = document.querySelector("form");
    const subforms = form.children;
    const prev = document.querySelector(".btn.prev");
    const next = document.querySelector(".btn.next");
    const error = document.querySelector(".error");
    let current = 0;

    prev.addEventListener("click", () => {
      if (current == 0) return;
      subforms[current].classList.remove("active");
      subforms[current - 1].classList.add("active");
      current--;
      window.scrollTo(0, 0);
    });

    next.addEventListener("click", () => {
      if (current == subforms.length - 2) {
        if (form.checkValidity()) {
          form.submit();
        } else {
          alert("لطفا همه فیلد های موردنیاز را پر کنید");
        }
      } else {
        subforms[current].classList.remove("active");
        subforms[current + 1].classList.add("active");
        current++;
        window.scrollTo(0, 0);
      }
    });
  </script>
  <style>
    body {
      background-color: #f5f5f5;
      color: #333;
      text-align: right;
      font-family: 'Vazirmatn UI';
    }

    .info {
      display: flex;
      flex-wrap: wrap;
    }

    .user-box {
      flex-grow: 1;
      flex-basis: 100;
      padding: 3rem;
    }

    select {
      border-radius: 1rem;
      font-family: tahoma;
      padding: 0.5rem;
    }

    textarea {
      border-radius: 1rem;
      background: #f9f9f9;
      padding: 4px;
      border: #ccc 1px solid;
      outline: 0;
    }

    input {
      border-radius: 1rem;
      background: #f9f9f9;
      padding: 4px;
      border: #ccc 1px solid;
      outline: 0;
    }

    input:hover {
      background: #f5f5f5;
      border: #92c9ff 1px solid;
    }

    input:focus {
      background: #f0f0f0;
      border: #3399ff 1px solid;
    }

    label {
      padding: 0.3rem;
      height: 50px;
    }

    h3 {
      padding-right: 3.2rem;
      color: #3a3a3a;
    }

    .top-dashboard {
      display: grid;
      place-items: center;
      gap: 20px;
      grid-template-columns: repeat(3, 1fr);
      position: relative;
      left: 150px;
    }

    .user-table {
      display: grid;
      place-items: center;
      gap: 20px;
      grid-template-columns: repeat(2, 1fr);
      position: relative;
    }

    .user-table2 {
      display: grid;
      place-items: center;
      gap: 20px;
      grid-template-columns: repeat(3, 1fr);
      position: relative;
      left: 100px;
    }

    .tozih {
      width: 200%;
    }

    .tozih-d {
      position: relative;
      left: 400px;
    }

    .onvan {
      position: relative;
      right: 200px;
    }

    .user-tableB {
      flex-grow: 1;
      flex-basis: 100;
      padding-right: 50px;
      padding-left: 200px;
      padding-bottom: 20px;
      padding-top: 20px;
    }

    td {
      padding-top: 20px;
      padding-left: 50px;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      border: 1px solid #e7e7e7;
      background-color: #f3f3f3;
    }

    li {
      float: right;
    }

    li a {
      display: block;
      color: #666;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    li a:hover:not(.active) {
      background-color: #ddd;
    }

    li a.active {
      color: white;
      background-color: #04AA6D;
    }

    #main_card {
      display: flex;
      justify-content: center;
    }

    .dashboard-table {
      float: left;
    }

    #welcome {
      float: left;
    }

    .info {
      /*/padding: 1.5rem;*/
      display: flex;
      flex-direction: wrap;
      /*flex-wrap: wrap;
      justify-content: space-around;
      align-items: start;*/

      /*align-content: space-around;*/
    }

    .info1 {
      padding: 1.5rem;
      display: flex;
      flex-direction: wrap;
      flex-wrap: wrap;
      justify-content: space-around;
      align-items: start;

      /*align-content: space-around;*/
    }

    /*.info .user-box {
      width: 29rem;
      padding: 2rem;
    }*/

    li a {
      display: block;
      color: #666;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    li a:hover {
      background-color: #04AA6D;
      border-radius: 1rem;
    }

    .top-border {
      position: relative;
      padding: 1rem;
    }

    .top-border h2 {
      position: absolute;
      top: -2.3rem;
      right: 47%;
      background-color: #f5f5f5;
    }

    .topbutton {
      background-image: url(asset/icons8-collapse-arrow-50.png);
      background-color: blueviolet;
      background-repeat: no-repeat;
      background-position: center;
      width: 40px;
      height: 40px;
      border: 0;
      border-radius: 40%;
      position: fixed;
      right: 20px;
      bottom: 20px;
      cursor: auto !important;
      opacity: 0.5;
      transition: opacity 0.5s
    }

    h3 {
      text-align: center;
    }

    h4 {
      text-align: center;
    }

    .user-table {

      text-align: center;
    }

    .user-table .item {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .user-table2 {

      text-align: center;
    }

    .user-table2 .item {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;

    }

    .user-table div p {
      text-align: center;
      border: 0.5px solid #bdb7b7;
      width: 20rem;
      height: 4rem;
      padding-top: 1rem;

    }

    .user-table2 {
      text-align: center;
    }

    .user-table2 div p {
      text-align: center;
      border: 0.5px solid #bdb7b7;
      width: 20rem;
      height: 4rem;


    }
  </style>

</head>

<body dir="rtl">



  <div class="container" style="text-align: right;">

    @yield('content')
  </div>

</body>

</html>