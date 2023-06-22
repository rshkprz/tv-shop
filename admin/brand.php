<style>
   * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
}

.navbar {
    display: flex;
    align-items: center;
    padding: 20px;
}

.navbar input[type=text] {
    float: right;
    padding: 6px;
    margin-top: 8px;
    margin-right: 16px;
    border: none;
    font-size: 17px;
    overflow: hidden;
}

nav {
    flex: 1;
    text-align: center;
}

nav ul {
    display: inline-block;
    list-style-type: none;
   
}

nav ul li {
    display: inline-block;
    margin-right: 10px;
    margin-bottom: 20px;
    padding: 8px 20px;
    border-radius: 30px;
  
}
nav ul li a {
    color: #000;
    display: inline-block;
    text-decoration: none;
   
}
.test:hover {
    background: linear-gradient(to right, #ffff00 0%, #BFDC36 100%);
    transition: background 0.5s;
    
}

/* nav ul li a hr {
    height: 80px;
    width: 25%;
    margin: -95px 0;
    background: linear-gradient(to right, #ffff00 0%, #ff3399 100%);
}   */

strong{
    color:#ff523b;
    /* max-width: 1400px; */
    /* padding-left: 450px;
    padding-right: 450px; */
    width: 100%;
    /* display: block;
    margin-left: auto;
    margin-right: auto;
     */
     display: flex;
     align-items: center;
    
}
strong ul{
 
    display: inline-block;
    list-style-type: none;
    margin-left: auto;
    margin-right: auto;
    padding: 20px;

   
}
strong ul li{
 
   
    display: inline-block;
    margin-right: 20px;
   
}
a {
    text-decoration: none;
    color: rgb(0, 0, 0);

}
.listed:hover {
    opacity: 0.8;
    color:#ff523b;
    transition: 0.2s;
    
}
.listed {
    text-decoration: none;
    color: rgb(0, 0, 0);
    opacity: 1;
    transition: 0.5s;
  
}


p {
    color: #555;
    box-sizing: border-box;
}
.cat {
    display: block;
    margin-left: auto;
    margin-right: auto;
}
.list-category{
    background: linear-gradient(to right, #ffff00 0%, #BFDC36 100%);
    flex: auto;
    
    /* overflow: hidden;
    z-index: 0;
    position: relative;
    float: left; */

    
}

.container {
    max-width: 1300px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
   
}
.container_next {
    max-width: 1300px;
  
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
    padding-top: 50px;
    padding-bottom: 400px;
}
.btn-container {
    background-color: #04AA6D;
    color: white;
    padding: 12px;
    margin: 10px 0;
    border: none;
    width: 100%;
    border-radius: 3px;
    cursor: pointer;
    font-size: 17px;
}

.btn-container:hover {
    background-color: #45a049;
}

.row {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around;
}

.col-2 {
    flex-basis: 50%;
    min-width: 300px;
}

.col-2 img {
    max-width: 100%;
    padding: 50px 0;
}

.col-2 h1 {
    font-size: 50px;
    line-height: 60px;
    margin: 25px 0;
}

.btn {
    display: inline-block;
    background: #ff523b;
    color: #fff;
    padding: 8px 30px;
    border-radius: 30px;
    transition: background 0.5s;
    margin-bottom: 20px;
   
    margin-top: 20px;
}

.btn:hover {
    background: #563434;
}

.header {
    background: radial-gradient(#fff, #485162);
}

.header .row {
    margin-top: 5px;
}

.categories {
    margin: 70px 0;
}

.col-3 {
    flex-basis: 30%;
    min-width: 250px;
    margin-bottom: 30px;
}

.col-3 img {
    width: 100%;
}

.small-container {
    max-width: 1080px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
    padding-bottom: 50px;
}
.small-container-compare {
    max-width: 100%;
    margin: auto;
  box-sizing: border-box;
  padding:20px;
 
}
.small-container_next {
    max-width: 1080px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
    padding-bottom: 300px;
}


.col-4 {
    flex-basis: 25%;
    padding: 10px;
    min-width: 200px;
    margin-bottom: 50px;
    transition: transform 0.5s;
}

.col-4 img {
    width: 100%;
}

.title {
    text-align: center;
    margin: 0 auto 80px;
    position: relative;
    line-height: 60px;
    color: #555;
}

.title::after {
    content: '';
    background: #ff523b;
    width: 80px;
    height: 5px;
    border-radius: 5px;
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translate(-50%);

}

h4 {
    color: #555;
    font-weight: normal;

}

.col-4 p {
    font-size: 14px;


}

.rating .fa {
    color: #ff523b;
}

.col-4:hover {
    transform: translateY(-5px);
}

/*----offer----*/
.offer {
    background: radial-gradient(#fff, #EBE8D7);
    margin-top: 80px;
    padding: 30px 0;
}

.col-2 .offer-img {
    padding: 50px;
}

small {
    color: #555;
}

/*footer*/
.footer {
    background: #000;
    color: #8a8a8a;
    font-size: 14px;
    padding: 30px 0px 20px;

}

.footer p {
    color: #8a8a8a;
}

.footer h3 {
    color: #fff;
    margin-bottom: 20px;
}

.footer-col-1,
.footer-col-2,
.footer-col-3,
.footer-col-4 {
    min-width: 250px;
    margin-bottom: 50px;
}

.footer-col-1 {
    flex-basis: 30%;
}

.footer-col-2 {
    flex: 1;
    text-align: center;
}

.footer-col-2 img {
    width: 180px;
    margin-bottom: 20px;
}

.footer-col-3,
.footer-col-4 {
    flex-basis: 12%;
    text-align: center;

}

ul {
    list-style: none;
}

.footer h1 {
    background: #b5b5b5;
    height: 1px;
    margin: 20px 0;
    border: none;
}

.copyright {
    text-align: center;
}

.menu-icon {
    width: 28px;
    margin-left: 20px;
    display: none;
}

/*media query for menu*/
@media only screen and (max-width:800px) {
    nav ul {
        position: absolute;
        top: 70px;
        left: 0;
        background: #333;
        width: 100%;
        overflow: hidden;
        transition: max-height 0.5s;
    }

    nav ul li {
        display: block;
        margin-right: 50px;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    nav ul li a {
        color: #fff;
    }

    .menu-icon {
        display: block;
        cursor: pointer;
    }

    .navbar input[type=text] {
        border: 1px solid #ccc;
        float: none;
        display: block;
        text-align: left;
        width: 100%;
        margin: 0;
        padding: 14px;
    }
}

/*media query for less than 600 screen size*/

@media only screen and (max-width:600px) {
    .row {
        text-align: center;
    }

    .col-2,
    .col-3,
    .col-4 {
        flex-basis: 100%;
    }

    .single-product .row {
        text-align: left;
    }

    .single-product .col-2 {
        padding: 20px 0;
    }

    .single-product h1 {
        font-size: 26px;
        line-height: 32px;
    }

    .car-info p {
        display: none;
    }

    .navbar input[type=text] {
        border: 1px solid #ccc;
        float: none;
        display: block;
        text-align: left;
        width: 100%;
        margin: 0;
        padding: 14px;
    }

    /*compare*/
    div.comparisontable ul.row {
        flex-direction: column;
    }

    div.comparisontable img {
        width: auto;
        height: auto;
    }

    div.comparisontable ul.row li {
        margin-right: 0;
        width: auto;
        flex: auto;
    }

    /* first and last cell within legend column */
    div.comparisontable ul.row:first-of-type li.legend.legend,
    div.comparisontable ul.row:last-of-type li.legend {
        display: none;
    }

    div.comparisontable ul.row li.legend {
        width: auto;
    }

}



/* -----------all products----*/
.row-2 {
    justify-content: space-between;
    margin: 100px auto 50px;
}

select {
    border: 1px solid #ff523b;
    padding: 5px;
}

select:focus {
    outline: none;

}

.page-btn {
    margin: 0 auto 80px;

}

.page-btn span {
    display: inline-block;
    border: 1px solid #ff523b;
    margin-left: 10px;
    width: 40px;
    height: 40px;
    text-align: center;
    line-height: 40px;
    cursor: pointer;

}

.page-btn span:hover {
    background: #ff523b;
    color: white;
}

/*single product*/
.single-product {
    margin-top: 80px;

}

.single-product .col-2 img {
    padding: 0;

}

.single-product .col-2 {
    padding: 20px;
}

.single-product h4 {
    margin: 20px 0;
    font-size: 20px;
    font-weight: bold;
}

.single-product input {
    width: 50px;
    height: 40px;
    padding-left: 10px;
    font-size: 20px;
    margin-right: 10px;
    border: 1px solid #ff523b;
}

input:focus {
    outline: none;
}
xx
.small-img-row {
    display: flex;
    justify-content: space-between;

}

.small-img-col {
    flex-basis: 24%;
    cursor: pointer;
}

/*cart items*/
.cart-page {
    margin: 80px auto;

}
.compare-page{
    margin: auto;
    padding-bottom: 300px;
}
table {
    width: 100%;
    border-collapse: collapse;
   
}

.cart-info {
    display: flex;
    flex-wrap: wrap;

}

th {
    text-align: left;
    padding: 5px;
    color: #f73b3b;
    /* background: #ff523b; */
    font-weight: bold;

}

td {
    padding: 10px 10px;

}

td input {
    width: 40px;
    height: 30px;
    padding: 5px;
}

td a {
    color: #ff523b;
    font-size: 12px;
    padding-top: 5px;

}

td img {
    width: 80px;
    height: 80px;
    margin-right: 10px;
}

tr:hover {background-color: #ddd;}
tr:nth-child(even){background-color: #f2f2f2;}
.total-price {
    display: flex;
    justify-content: flex-end;

}

.total-price table {
    border-top: 3px solid #ff523b;
    width: 100%;
    max-width: 400px;
}



.account-page {
    padding: 50px 0;
    background: radial-gradient(#fff, #ffd6d6);
}

.form-container {
    background: white;
    width: 300px;
    height: 400px;
    position: relative;
    text-align: center;
    padding: 20px 0;
    margin: auto;
    box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0, 1);
    overflow: hidden;
}

.form-container span {
    font-weight: bold;
    padding: 0 10px;
    color: #555;
    cursor: pointer;
    width: 100px;
    display: inline-block;
}

.form-btn {
    display: inline-block;

}

.form-container form {
    max-width: 300px;
    padding: 0 20px;
    position: absolute;
    top: 130px;
    transition: transform 1s;
}

form input {
    width: 100%;
    height: 30px;
    margin: 10px 0;
    padding: 0 10px;
    border: 1px solid #ccc;
}

form .btn {
    width: 100%;
    border: none;
    cursor: pointer;
    margin: 10px 0;

}

form .btn:focus {
    outline: none;
}

#LoginForm {
    left: -300px;

}

#RegForm {
    left: 0;
}

form a {
    font-size: 12px;
}

#Indicator {
    width: 100px;
    border: none;
    background: #ff523b;
    height: 3px;
    margin-top: 8px;
    transform: translateX(100px);
    transition: transform 1s;
}

/*---compare--*/
div.comparisontable {
    display: flex;
    flex-direction: column;
    /* turn children ul elements into stacked rows */
}

div.comparisontable img {
    width: 250px;
    height: 250px;
}

div.comparisontable ul.row {
    list-style: none;
    display: flex;
    /* turn children li elements into flex children */
    flex: 1;
    flex-wrap: wrap;
}

div.comparisontable ul.row li {
    background: radial-gradient(#fff, #ffd6d6);
    flex: 1;
    padding: 10px;
    border-bottom: 1px solid gray;
}

/* the legend column (first li within each row) */
div.comparisontable ul.row li.legend {
    background: #ff523b;
    color: white;
    border: none;
    width: 200px;
    border-bottom: 1px solid white;
}

/* very first row */
div.comparisontable ul.row:first-of-type li {
    text-align: center;
}

/* very last row */
div.comparisontable ul.row:last-of-type li {
    text-align: center;
    border-bottom: none;
    box-shadow: 0 6px 6px rgba(0, 0, 0, 0.23);
}


/* first and last cell within legend column */
div.comparisontable ul.row:first-of-type li.legend.legend,
div.comparisontable ul.row:last-of-type li.legend {
    background: transparent;
    box-shadow: none;
}

.contact-info {
    color: rgb(35, 4, 4);
    max-width: 500px;
    line-height: 65px;
    padding-left: 50px;
    font-size: 18px;

}

.contact-info i {
    margin-right: 20px;
    font-size: 25px;
}

.contact-form {
    max-width: 100%;
    margin-right: 450px;
    margin-left: 450px;
    margin-bottom: 100px;
}

.contact-info,
.contact-form {
    flex: 1;
}

.contact-form h2 {
    color: rgb(21, 20, 20);
    text-align: center;
    font-size: 35px;
    text-transform: uppercase;
    margin-bottom: 30px;
}

.contact-form .text-box {
    background: rgb(227, 213, 213);
    color: rgb(21, 20, 20);
    border: none;
    width: calc(50% - 10px);
    height: 50px;
    padding: 12px;
    font-size: 15px;
    border-radius: 5px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    opacity: 0.9;
}

.contact-form .text-box:first-child {
    margin-right: 15px;
}

.contact-form textarea {
    background: rgb(227, 213, 213);
    color: rgb(21, 20, 20);
    border: none;
    width: 100%;
    padding: 12px;
    font-size: 15px;
    min-height: 200px;
    max-height: 400px;
    resize: vertical;
    border-radius: 5px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    opacity: 0.9;
}

.contact-form .send-btn {

    background: #ff523b;
    color: #fff;
    border: none;
    width: 120px;
    height: 40px;
    font-size: 15px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 2px;
    border-radius: 5px;

}

#form {
    width: 300px;

    padding: 20px;
    background-color: whitesmoke;
    border-radius: 4px;
    font-size: 12px;

}

#form h1 {
    color: #0f2027;
    text-align: center;
}

#form button {
    padding: 10px;
    margin-top: 10px;
    width: 100%;
    color: white;
    background-color: #ff523b;
    border: none;
    border-radius: 4px;
}

.input-control {
    display: flex;
    flex-direction: column;
}

.input-control input {
    border: 2px solid #f0f0f0;
    border-radius: 4px;
    display: block;
    font-size: 12px;
    padding: 10px;
    width: 100%;
}

.input-control input:focus {
    outline: 0;
}

.input-control.success input {
    border-color: #09c372;
}

.input-control.error input {

    border-color: #ff3860;
}

.input-control .error {
    color: #ff3860;
    font-size: 9px;
    height: 13px;
}


.col-md-4 {
    align-items: center;
    width: 100%;
}

/*Accordion styles*/
.accordion .accordion__title {
    background: #f4f4f4;
    height: 65px;
    line-height: 65px;
    display: flex;
    align-items: center;
    padding: 0 30px;
    position: relative;
    font-size: 16px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin-bottom: 10px;
    font-family: "Poppins";
    cursor: pointer;
}

.accordion .accordion__title:before {
    content: "\f278";
    font-family: 'Material-Design-Iconic-Font';
    display: inline-block;
    padding-right: 10px;
    transition: all 0.3s ease-in-out 0s;
}

.accordion .accordion__title.active:before {
    content: "\f273";
}

.accordion .accordion__body {
    padding-top: 20px;
    padding-bottom: 30px;
}


/*Accordion body form styles*/
.accordion__body__form {
    font-family: "Poppins";
}

.accordion__body__form .checkout-method__subtitle {
    letter-spacing: 1px;
    margin-bottom: 20px;
    color: #8c8c8c;
    font-family: 'OldStandardTT';
}

.accordion__body__form .checkout-method__title {
    font-size: 14px;
    color: #3f3f3f;
    text-transform: uppercase;
    font-weight: 500;
    letter-spacing: 1px;
    margin-bottom: 15px;
}

.accordion__body__form .checkout-method .checkout-method__title {
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    -ms-align-items: center;
    align-items: center;
    color: #000;
    font-size: 16px;
}

.accordion__body__form .checkout-method .checkout-method__title i.zmdi {
    padding-right: 13px;
    font-size: 24px;
    line-height: 24px;
}

.accordion__body__form .checkout-method .checkout-method__single {
    margin-bottom: 40px;
}

.accordion__body__form .checkout-method .checkout-method__single:last-child {
    margin-bottom: 0px;
}

.accordion__body__form .checkout-method .checkout-method__single .single-input {
    margin-left: 20px;
}

.accordion__body__form .checkout-method .checkout-method__single .single-input label {
    font-weight: 500;
    color: #000;
}

.accordion__body__form .checkout-method .checkout-method__single .single-input input[type="radio"] {
    margin-right: 10px;
}

.accordion__body .checkout-method__login p.require {
    color: #f10;
    letter-spacing: 1px;
}

.accordion__body .checkout-method__login .single-input {
    margin-bottom: 20px;
}

.accordion__body .checkout-method__login .single-input label {
    font-weight: 500;
    color: #000;
}

.accordion__body .checkout-method__login .single-input label:before {
    content: "*";
    padding-right: 15px;
    color: #c2a476;
}

.accordion__body .checkout-method__login .single-input input {
    height: 32px;
    line-height: 32px;
    padding-left: 15px;
    background: #f6f6f6;
    border: 1px solid #f6f6f6;
}

.accordion__body .checkout-method__login .single-input input:focus,
.accordion__body .checkout-method__login .single-input input:active {
    background: transparent;
    border: 1px solid #c43b68;
}

.accordion__body .checkout-method__login .dark-btn {
    margin-top: 20px;
}


/*Billing Info*/
.bilinfo .single-input,
.paymentinfo-credit-content .single-input,
.shipinfo .single-input {
    margin-top: 20px;
}

.bilinfo .single-input.mt-0,
.paymentinfo-credit-content .single-input.mt-0,
.shipinfo .single-input.mt-0 {
    margin-top: 0px;
}

.bilinfo .single-input input,
.shipinfo .single-input input,
.paymentinfo-credit-content .single-input input,
.bilinfo .single-input select,
.paymentinfo-credit-content .single-input select,
.shipinfo .single-input select {
    height: 40px;
    line-height: 40px;
    padding: 0 15px;
    font-family: "poppins";
    transition: all 0.3s ease-in-out 0s;
    border: 1px solid #888;
}

.bilinfo .single-input input:focus,
.shipinfo .single-input input:focus,
.paymentinfo-credit-content .single-input input:focus,
.bilinfo .single-input select:focus,
.shipinfo .single-input select:focus,
.paymentinfo-credit-content .single-input select:focus,
.bilinfo .single-input select:active,
.paymentinfo-credit-content .single-input select:active,
.shipinfo .single-input select:active {
    outline: none;
    border: 1px solid #c43b68;
}

/*Shipinfo*/
.shipinfo__title {
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #000;
    font-weight: 500;
    font-size: 16px;
    margin-bottom: 15px;
}

.shipinfo p {
    font-family: "Poppins";
}

.shipinfo .ship-to-another-trigger {
    display: inline-block;
    margin-top: 20px;
    font-family: "Poppins";
    font-size: 16px;
}

.shipinfo .ship-to-another-trigger i.zmdi {
    padding-right: 5px;
}

.ship-to-another-content {
    display: none;
    margin-top: 30px;
}


/*Ship method*/
.shipmethod .single-input {
    margin-top: 20px;
}

.shipmethod .single-input:first-child {
    margin-top: 0px;
}

.shipmethod .single-input label {
    font-family: "Poppins";
    color: #3333;
    font-weight: 500;
}

.paymentinfo .single-method a i.zmdi {
    padding-right: 5px;
}

.paymentinfo .single-method a {
    display: inline-block;
    margin-top: 15px;
    font-family: "Poppins";
    font-size: 16px;
}

.paymentinfo-credit-content {
    margin-top: 30px;
    display: none;
}

/*Order details*/
.order-details {

    background: #f4f4f4;
}

.order-details .order-details__title {
    padding: 30px 0;
    margin: 0 15px;
    border-bottom: 1px solid #ebebeb;
    text-transform: uppercase;
    text-align: center;
    letter-spacing: 1px;
    font-family: "poppins";
    font-size: 16px;
    font-weight: 600;
    color: #3f3f3f;
}

.order-details .order-details__item {
    padding: 15px 0;
    margin: 0 30px;
    border-bottom: 1px solid #ebebeb;
}

.order-details .order-details__item .single-item {
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    justify-content: space-between;
    -ms-align-items: center;
    align-items: center;
    padding: 5px;
}

.order-details .order-details__item .single-item .single-item__content {
    flex-grow: 2;
}

.order-details .order-details__item .single-item .single-item__content a {
    font-size: 16px;
    font-family: "OldStandardTT";
    letter-spacing: 1px;
    color: #666;
    transition: all 0.3s ease-in-out 0s;
}

.order-details .order-details__item .single-item .single-item__content a:hover {
    color: #c43b68;
}

.order-details .order-details__item .single-item .single-item__content span {
    font-family: "Poppins";
    font-weight: 600;
    display: block;
}

.order-details .order-details__item .single-item .single-item__thumb img {
    text-align: center;
    width: 80px;
    height: 80px;
    overflow: hidden;
    margin-right: 20px;
}

.order-details .order-details__item .single-item .single-item__remove {
    width: 150px;
    text-align: center;
    font-size: 15px;
    color: #212121;
}

.order-details .order-details__item .single-item .single-item__remove a:hover {
    color: #f10;
}

.order-details .order-details__count {
    margin: 0 30px;
    padding: 15px 0;
    width: 122%;
    border-bottom: 1px solid #ebebeb;
}

.order-details .order-details__count .order-details__count__single {
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    justify-content: space-between;
    -ms-align-items: center;
    align-items: center;
    padding: 5px 0;
}

.order-details .order-details__count .order-details__count__single h5 {
    color: #3f3f3f;
    text-transform: uppercase;
    font-size: 16px;
    letter-spacing: 1px;
    font-weight: 600;

}

.order-details .order-details__count .order-details__count__single span.price {
    width: 30%;
    text-align: left;
    font-weight: 600;
    font-family: "Poppins";
}

.order-details .ordre-details__total {
    margin: 0 30px;
    padding: 30px 0;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    -ms-align-items: center;
    align-items: center;
    justify-content: space-between;
}

.order-details .ordre-details__total h5 {
    color: #3f3f3f;
    text-transform: uppercase;
    font-size: 16px;
    letter-spacing: 1px;
    font-weight: 700;
}

.order-details .ordre-details__total span.price {
    width: 10%;
    text-align: left;
    font-weight: 700;
    font-family: "Poppins";
    letter-spacing: 1px;
}


/*Buttons*/
.dark-btn a {
    display: inline-block;
    height: 45px;
    line-height: 45px;
    text-align: center;
    text-transform: uppercase;
    background: #b71717;
    color: #ffffff;
    font-family: "Poppins";
    padding: 0 45px;
    font-weight: 600;
    letter-spacing: 1px;
    font-size: 16px;
    transition: all 0.3s ease-in-out 0s;
}


.row-checkout {
    margin-left: -20px;
    margin-right: -20px;
}

.accordion .accordion__title {
    background: #f4f4f4;
    height: 65px;
    line-height: 65px;
    display: flex;
    align-items: center;
    padding: 0 30px;
    position: relative;
    font-size: 16px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin-bottom: 10px;
    font-family: "Poppins";
    cursor: pointer;
}

.accordion .accordion__hide {
    background: #f4f4f4;
    height: 65px;
    line-height: 65px;
    display: flex;
    align-items: center;
    padding: 0 30px;
    position: relative;
    font-size: 16px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin-bottom: 10px;
    font-family: "Poppins";
    cursor: pointer;
}

/*-----------------------------------------
  Header Search area
-------------------------------------------*/


.search__area {
    background: #ffd6d6;

    left: 0;
    position: fixed;
    right: 0;
    top: 0;
    -webkit-transform: translateY(-200%);
    transform: translateY(-200%);
    transition: all 300ms ease 0s;
    z-index: 2147483647;
}

.search__area .search__inner {
    position: relative;
}

.search__area .search__inner form {
    margin: 4em 0;
    padding: 0 40px 0 0;
    position: relative;
    text-align: center;
}
.small-img-row{
    display: flex;
    justify-content: flex-start;

}

.search__area .search__inner form input[type="text"] {
    background: #fff none repeat scroll 0 0;
    border: medium none;
    color: #333;
    font-size: 25px;
    height: 60px;
    line-height: 60px;
    padding: 0 10px 0 20px;
    text-align: left;
}

.search__area .search__inner form input[type="text"]::-webkit-input-placeholder {
    /* Chrome/Opera/Safari */
    color: #333;
    font-size: 25px;
    font-weight: 300;
}

.search__area .search__inner form input[type="text"]::-moz-placeholder {
    /* Firefox 19+ */
    color: #333;
    font-size: 25px;
    font-weight: 300;
}

.search__area .search__inner form input[type="text"]:-ms-input-placeholder {
    /* IE 10+ */
    color: #333;
    font-size: 25px;
    font-weight: 300;
}

.search__area .search__inner form input[type="text"]:-moz-placeholder {
    /* Firefox 18- */
    color: #333;
    font-size: 25px;
    font-weight: 300;
}

.search__area .search__inner form button {

    border: 0 none;
    border-radius: 0;
    cursor: pointer;
    height: 75px;
    line-height: 75px;
    position: absolute;
    right: 30px;
    top: 0;
    width: 60px;
    transition: 0.3s;
}

.search__area .search__inner form button:hover {
    background: #ffd6d6;
}

.search__area .search__inner form button:hover::before {
    color: #fff;
}

.search__area .search__inner .search__close__btn {
    display: block;
    line-height: 58px;
    position: absolute;
    right: 0;
    top: 0;
    padding: 10px 0 10px;
}

.search__area .search__inner .search__close__btn {
    color: #fff;
    cursor: pointer;
    font-size: 21px;
    line-height: 58px;
}

.search__close__btn .search__close__btn_icon i {
    color: #000;
    transition: all 0.5s ease 0s;
    -webkit-transform: scale(1) rotate(0deg);
    transform: scale(1) rotate(0deg);
}

.search__close__btn .search__close__btn_icon:hover i {
    -webkit-transform: scale(2) rotate(180deg);
    transform: scale(2) rotate(180deg);
    color: #000000;
}

.search__box__show__hide .search__area {
    -webkit-transform: translateY(0px);
    transform: translateY(0px);
    transition: all 300ms ease 0s;
}

.header__search a {
    color: #555;
    padding-right: 10px;
    font-family: 'Poppins', sans-serif;
    text-decoration: none;
    position: relative;

}

.col-md-12 {
    position: relative;
    min-height: 1px;
    padding-left: 20px;
    padding-right: 20px;
}

.row_search {

    margin-left: -20px;
    margin-right: -20px;
}

.text-left{ 
    text-align: left;
    font-size: large;
    color: #000000;

}
.comment-post{
    text-align: left;
    color:#09c372;
    font-size: medium;
}

.form-control{
    text-align: left;
   
}
.column{
    text-align: left;
}

.ht__pro__desc {
    margin-top: 25px;
    margin-bottom: 25px;
}
.sin__desc p span {
    color: #100d13;
    font-family: 'Poppins', sans-serif;
    font-size: 19px;
    text-transform: capitalize;
    padding-bottom: 200px;
}
</style>



<?php
// require('connection.inc.php');
require('top.inc.php');



if(isset($_GET['type']) && $_GET['type']!='')   {
   $type=get_safe_value($conn,$_GET['type']);
   if($type=='status')
   {
      $operation=get_safe_value($conn,$_GET['operation']);
      $id=get_safe_value($conn,$_GET['id']);
      if($operation=='active')
      {
         $status='1';
      }
      else{
         $status='0';
      }
      $update_status="update categories set status='$status' where id='$id'";
      mysqli_query($conn,$update_status);
   }
   if($type=='delete')
   {
      $id=get_safe_value($conn,$_GET['id']);
      $delete_sql="delete from categories where id='$id'";
      mysqli_query($conn,$delete_sql);
   }
}



// $sql="select * from categories order by categories asc";
// $res=mysqli_query($conn,$sql);
?>
<div class="content pb-0">
   <div class="orders">
      <div class="row">
         <div class="col-xl-12">
            <div class="card">
               <div class="card-body">
                  <h4 class="box-title">Categories</h4>
                  <h2 class="box-title"><a href="add_categories.php">Add Categories</a></h2>
               </div>
               <div class="card-body--">
                  <div class="table-stats order-table ov-h">
                     <table class="table ">
                        <thead>
                           <tr>
                              <th class="serial">SN</th>
                              <th>ID</th>
                              <th>Categories</th>
                              <th>Status</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php 
                           $i=1;
                           while($row=mysqli_fetch_assoc($res)){?>
                           <tr>
                              <td class="serial"><?php echo $i?></td>
                              <td><?php echo $row['id']?></td>
                              <td><?php echo $row['categories']?></td>
                              <td>
                                 <?php 
                                 if( $row['status']==1){
                                    echo "<a href='?type=status&operation=deactive&id=".$row['id']."'>Active</a>&nbsp";
                                 }
                                 else{
                                    echo "<a href='?type=status&operation=active&id=".$row['id']."'>Deactive</a>&nbsp";
                                 }
                                 echo "<a href='?type=delete&id=".$row['id']."'>Delete</a>&nbsp";
                                 echo "<a href='add_categories.php?type=edit&id=".$row['id']."'>Edit</a>";
                                 ?>
                              </td>
                           </tr>
                           <?php $i++;}?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php
require('footer.inc.php');
?>