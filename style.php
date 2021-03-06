body{
    margin: 0;
    padding: 0;
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

html{
    font-size: 15px;
    scroll-behavior: smooth;
}

/* header part  */

.colorbac{
    width: 100%;
    padding: 2rem 0 0 0 ;
    margin: 0;
    background: radial-gradient( #ffffff , #ffd6d6);
}

.center{
    max-width:1100px;
    margin: 0 auto;
}

.nav{
    padding: 0 0.8rem 0 0.8rem;
    width: 100%;
   display: flex;
   
}

.logo{
  width: 15%;
}

.logo img{
    widows: 11rem;
    height: 2.5rem;
    align-items: flex-end;
}

.nav .underpart{
    width: 12%;
    display: flex;
    margin-left: 1rem;
    align-items: flex-end;
}

.nav ul{
    width: 83%;
    display: flex;
    justify-content: flex-end;
    align-items: flex-end;
   
}

 .nav  ul li{
    margin-left: 1.3rem;
    list-style-type: none;
}
.nav ul li a {
  text-decoration: none;
  font-size: 1rem;
}

.underpart .cart{
    width:50%;
}

.underpart .cart img{
    width: 2rem;
    height:2rem;
} 

.nav button{
    display: none;
}

/* banner  */

.banner {
    width: 100%;
    display: flex;
    margin-top: 7rem;
}

.banner .bansec{
    width: 50%;
}

.banner .bansec h1{
    font-size:2.8rem;
    margin-top: 8rem;
    line-height:3rem;
}

.banner .bansec h2{
    font-size:1rem;
    margin: 1.5rem 0 1.9rem 0;
    font-weight: 300;
}

.banner .bansec .btt{
    font-family: 'Poppins', sans-serif;
    color: #ffffff;
    background-color:#ff6139;
    width: 12.5rem;
    height: 2.7rem;
    border: 0;
    border-radius: 2rem;
    outline: none;
    cursor: pointer;
    letter-spacing: 1px;
}

.banner .bansec img{
    width: 100%;
    height: 100%;
}


@media only screen and (max-width:800px){
    .nav button{
        width: 50%;
        display: block;
        border: 0;
        margin-left: 1.5rem;
        outline: none;
        cursor: pointer;
        background: none;
    }

    .banner-center{
        text-align: center;
    }

    .nav button img{
        width: 2rem;
        height:2rem;
        border: 0;
        outline: none;
    } 

    .nav ul{
        width: 90%;
        display: none;
        position: absolute;
        top: 7rem;
        padding: 1.5rem 0;
        border-radius: 1rem;
        border: 0.1rem solid #ffffff;
        box-shadow: 0.1rem 0.1rem 1rem  1px #ff6139;
        
    }

    .nav ul li a{
        color: #ff6139;
        font-family: 'Poppins', sans-serif;
        font-weight: 300;
        padding: 1rem 0;
    }

    .nav{
        display: flex;
        justify-content: space-between;
    }

    /* banner  */
    .banner {
        display:block;
        width: 100%;
        margin-top: 7rem;
    }

    .banner .bansec{
        width: 100%;
        padding: 1rem;
        margin-bottom: 3rem;
    }

    .underpart{
        width: 40%;
        justify-content: flex-start;
        margin-left: 0;
        display: flex;
        margin-right: 2rem;
    }

    .underpart a{
        width: 50%;
        padding-right: 3rem;
    }

    .underpart a img{
        width: 100%;
    }

    .underpart button{
        width:50%;
        margin-left: 0;
    }
    
    .underpart button img{
        width: 2rem;
        height:2rem;
    } 


}

/* complete  header part  */



/* 3 section part */

.min-center{
    max-width: 950px;
    margin: 0 auto;
}

.part1{
    width: 100%;
    display: flex;
    justify-content: space-evenly;
    margin-top: 4rem;
    padding-bottom: 4rem;
}

.category{
    width:28%;
}

.category a img{
    width: 100%;
    transition: all 1s linear ;
}

.category a img:hover{
    margin-top: -1.5rem;
}

/* part2  */

.part2{
   width: 100%;
}


.part2 .head{
    width: 30%;
    margin: 0 auto;
}

.part2 .head a{
    text-align: center;
    cursor: pointer;
    text-decoration: none;
    color: black;
}
.part2 .head hr{
   width:40%;
   height:0.2rem;
   border: 0;
   background-color: #ff6139;
   margin: 0 auto;
   margin-bottom: 3rem;
}

.part2 .products {
    display: flex;
    justify-content: space-evenly;
}

.part2 .products .section1{
    width:20%;
}

.part2 .products .section1 a img{
    width: 100%;
}

.part2 .products .section1 a{
    font-family: 'Poppins', sans-serif;
    text-decoration: none;
    color: black;
}

 .rate{
    color: #ff6139;
}

.part2 .products .section1 a h3{
    font-size: 1rem;
    font-weight: 400;
}

.part2 .products .section1  h4{
    font-size: 1rem;
    font-weight: 400;
}

/* part3 */

.part2 .mar{
    margin-top: 3rem;
}


@media only screen and (max-width:700px){
    .part1{
        width: 100%;
        display: block;
    }
    
    .category{
        width:100%;
        padding: 2.5rem;
    }
    
    .category a img{
        width: 100%;
    }

    /* part2 */
    .part2 .products {
        display: block;
    }

    .part2 .products .section1{
        width: 100%;
        padding: 2rem;
        text-align: center;
    }

    .part2 .products .section1 a h3{
        font-size: 1.2rem;
        font-weight: 400;
    }

    .part2 .head a{
       font-size: 1.3rem;
       font-weight: 100;
    }

}



/* 2 banner */

main{
    width: 100%;
    margin: 0;
    background: radial-gradient( #ffffff , #ffd6d6);
    margin: 4rem 0;
    padding: 5rem 0;
}

main .flex{
    display: flex;
}

main .flex .section2{
    width: 50%;
}

main .flex .section2 a img{
    width: 100%;
    height: 100%;
}

main .flex .section2 h3{
    margin: 2.5rem 0 0.5rem 0;
    font-weight: 400;
    font-size: 1.1rem;
}

main .flex .section2 h1{
    font-size: 3rem;
}

main .flex .section2 h4{
    font-size: 0.8rem;
    font-weight: 300;
    margin-top: 00.5rem;
}

main .flex .section2 button{
    font-family: 'Poppins', sans-serif;
    color: #ffffff;
    background-color:#ff6139;
    width: 10rem;
    height: 2.7rem;
    border: 0;
    border-radius: 2rem;
    outline: none;
    cursor: pointer;
    letter-spacing: 1px;
    margin-top:2rem;
}
@media only screen and (max-width:700px){
    main .flex{
        display: block;
    }
    
    main .flex .section2{
        width: 100%;
        text-align: center;
    }
    
}



/* second last part  */
.side{
    width: 100%;
    display: flex;
    justify-content: space-evenly;
}

.sec1{
    width: 30%;
    text-align: center;
    padding: 1rem  0.4rem;
    border: 0.4rem solid #f5f3f5;
}
.sec1 .left{
    font-size: 2.2rem;
    color: #ff6139;
}

.sec1 h6{
    font-size: 0.7rem;
    font-weight: 300;
    margin: 1.5rem 0 0.7rem 0;
}

.sec1 img{
    width: 4rem;
    height: 4rem;
    margin-top: 0.8rem;
    border-radius: 50%;
}

.sec1 h5{
    font-size: 0.8rem;
    font-weight: 600;
}

/* brands */

.brand{
    margin-top: 5rem ;
}

.brand img{
    width: 8rem;
    cursor: pointer;
    filter: grayscale(100%);
}

.brand img:hover{
    filter: grayscale(0%);
}

@media only screen and (max-width:700px){
    .side{
        width: 100%;
        display: block;
        padding: 1rem;
    }
    
    .side .sec1{
        width: 100%;
        margin-top: 1rem;
    }

    .brand img{
        width: 12rem;
        filter: grayscale(100%);
    }

    .brand{
        margin-top: 5rem;
        text-align: center;
    }
    
}



/* footer  */

footer{
    width: 100%;
    margin: 0;
    background-color: #010001;
    padding: 3rem 0 2rem 0;
    color: #ffffff;
}

.margin-top{
    margin-top: 4rem;
}

.rowtype{
    width: 100%;
}

.app{
    width: 100%;
}

.app img{
    width: 48%;
}

.down , .logof{
    width:30%;
}

.ul2{
    width: 10%;
    text-align: center;
}

.not{
    width: 80%;
    display: flex;
    justify-content: space-between;
    margin: 1.5rem 0;
}

.notf{
    display: flex;
    justify-content: space-around;
    margin: 1rem 0;
}

.logof{
    color: grey;
}

.logof h5{
    font-weight: 400;
}

.logof img{
    width:12rem;
    display: block;
    margin: 0 auto;
    margin-bottom: 2rem;
}

.down h2{
    font-weight: 500;
    font-size: 1rem;
    
}

.down h3{
    font-weight: 200;
    font-size: 0.8rem;
    letter-spacing: 1px;
    margin-top: 1.5rem;
    color: grey;
}

.ul2 h4{
    font-weight: 400;
}

.ul2 ul li{
    list-style-type: none;
}

.ul2 li a{
    font-family: 'Poppins', sans-serif;
    color: grey;
    font-weight: 300;
    text-decoration: none;
}

.center hr{
    width: 100%;
    height: 0.1rem;
    border: 0;
    background-color: grey;
}

.center p{
    font-weight: 100;
    font-size: 0.9rem;
    text-align: center;
    margin-top: 1rem;
}
@media only screen and (max-width:700px){
    .notf{
        display: block;
    }

    .down , .logof{
        width:100%;
    }

    .down{
        text-align: center;
    }

    .down .app{
        width:93%;
        display: block;
        margin:0 auto;
        margin:1rem;
    }

    .down h3{
        font-size: 1rem;
        margin-top: 00.5rem;
    }

    .ul2{
        width: 100%;
        text-align: center;
    }

    .logof h5{
        font-weight: 400;
        font-size: 1.1rem;
        text-align: center;
        padding: 1rem;
    }
    
    .logof img{
        width:40%;
        margin-top: 1rem;
    }

    .ul2{
        margin-top: 1.5rem;
    }

    .ul2 h4{
        font-size:1.7rem;
        font-weight: 300;
    }

    .ul2 li a{
        font-size:1.3rem;
    }
    
    .center hr{
        width: 100%;
        height: 0.2rem;
        border: 0;
        background-color: grey;
    }

    .not{
        width: 100%;
        display: block;
        margin: 1.5rem 0;
    }

    .not img{
        display: block;
         width: 60%;
         margin: 0 auto;
         margin-top: 0.5rem;
    }
}


/* all products page  */
.top{
    margin-top: 3rem;
}

.max{
    max-width:900px;
    margin: 0 auto;
    padding: 3rem 0 1rem 0;
}

.text{
    width: 100%;
    display: flex;
    justify-content: space-evenly;
}

.a , .select{
    width: 48%;
}

.a a{
    text-decoration: none;
    color: black;
    font-size: 1.5rem;
}

.select{
   text-align: right;
}

.select select{
    width: 10rem;
    height: 2rem;
    border: 0;
    outline: none;
    cursor: pointer;
    border: 00.1rem solid #ff6139;
}

.pagenation{
    width: 50%;
    margin-top: 4rem;
}

.pagenation a{
    text-decoration: none;
    color: black;
    padding: 0.7rem 1rem;
    margin-left: 00.5rem;
    border: 00.1rem solid #ff6139;
    transition: all 1ms linear;
}

.pagenation a:hover{
    background-color: #ff6139;
    color: #ffffff;
}

@media only screen and (max-width:700px){

    .pagenation{
        margin-top: 4rem;
        display: block;
        margin: 0 auto;
    }

    .pagenation a{
        padding: 0.4rem 0.5rem;
    }
}



/* products  */

.protop{
    margin-top: 2rem;
}

.More a{
    text-decoration: none;
    color: #dbdb;
}

.sizeR a{
    font-size: 1.3rem;
}

.proflex{
    display: flex;
    justify-content: space-between;
    width: 100%;
    margin-top:3rem;
}

.images4,.into{
    width: 48%;
}

.productrow img{
    width: 100%;
    cursor: pointer;
}

.row_flex{
    margin-top: 1rem;
    width: 100%;
    display: flex;
    justify-content: space-between;
}

.row_flex .img4{
    width: 20%;
}

.into{
    padding-top:2.5rem ;
}

.into h2{
    font-size: 0.8rem;
    font-weight: 300;
    color: grey;
}

.into h1{
    font-size: 2.8rem;
    line-height: 3rem;
    margin: 2.5rem 0 2rem 0;
}

.into h3{
    font-size: 1rem;
    color: lightslategray;
    font-weight: 500;
    margin-bottom: 1.5rem;
}

.into select{
    width: 9rem;
    height: 2rem;
    border: 0;
    border: 0.1rem solid #ff6139;
    margin-bottom: 1.5rem;
    outline: none;
}

.cartjo{
    width: 39%;
    display: flex;
    justify-content: space-between;
    margin-bottom: 2.5rem;
}

.cartjo input{
    width: 2.3rem;
    height: 2rem;
    border: 0;
    border: 0.1rem solid #ff6139;
    outline: none;
    text-align: center;
}
.cartjo .add {
   width: 9rem;
   height: 2.3rem;
   font-size: 0.7rem;
   text-decoration: none;
   color: #ffffff;

}

.cartjo .add h5{
    font-size: 0.8rem;
    padding: 0.4rem 0rem;
    background-color: #ff6139;
    font-weight: 400;
    text-align: center;
    border-radius: 3rem;
}

.into h4{
    font-size: 1rem;
    margin-bottom: 2rem;
}

.into h4 a span{ 
    color: #ff6139;
    margin-left: 0.5rem;
}

.into h6{
    font-size: 0.8rem;
    margin-bottom: 2rem;
    font-weight: 300;
    color: grey;
}

.imgmini img{
  
}



@media only screen and (max-width:700px){
   
    .sizeR a{
        font-size: 1rem;
    }

    .proflex{
        display: block;
        width: 100%;
    }
    
    .images4,.into{
        width: 100%;
        padding: 1rem;
        text-align: center;
    }

    .cartjo{
        width: 50%;
        display:block;
        margin: 0 auto;
      
    }

    .cartjo{
        width: 100%;
        display: block;
      
    }
    
    .cartjo .add{
      margin-top: 6rem;
    }

    .into{
    padding-top:2.5rem ;

    }

    .into h2{
        font-size: 0.8rem;
    }

    .into h1{
        font-size: 2.2rem;
        line-height: 3rem;
        margin: 1rem 0 1rem 0;
    }

    .into h3{
        font-size: 0.8rem;
        margin-bottom: 1rem;
    }

    .into select{
        width: 9rem;
        height: 2rem;
    }

    .cartjo{
        width: 38%;
        display: block;
        margin-bottom: 1rem;
    }

    .cartjo input{
        width: 2.3rem;
        height: 2rem;
        margin-bottom: 1rem;
    }
    .cartjo .add {
    width: 8rem;
    height: 2rem;
    font-size: 0.7rem;
    text-decoration: none;
    color: #ffffff;
    }

    .into h4{
        font-size: 1rem;
        margin-bottom: 1rem;
    }
    


}


/* cart  */
.add{
    margin-bottom: 3rem;
}

.cart{
    max-width: 880px;
    margin: 0 auto;
}

.left-side{
    text-align: left;
}

.right-side {
    text-align: right;
}
.text-align{
    text-align: center;
}

.color{
    background-color: #ff6139;
    color: #ffffff;
    font-weight: 400;
   
}

.color th{
    font-weight: 300;
    padding: 0.3rem 0.3rem;
}

table{
    width: 100%;
    border-collapse: collapse;
}
.cart td img{
    width: 7rem;
    height: 7rem;
}

.com{
    padding: 0 0.5rem;
}

.com h1{
    font-size: 0.9rem;
    font-weight: 300;
}

.com h2{
    font-size: 0.9rem;
    font-weight: 500;
}

.com h3{
    font-size: 0.9rem;
    cursor: pointer;
    color: #ff6139;
    font-weight: 400;
}

.text-align input{
    width:10%;
    margin-right: 1.7rem;
    text-align: center;
    border: 0;
    border: 0.1rem solid #dbdbdb;
    outline: none;
}

.right-side h1{
    font-size: 0.9rem;
    font-weight: 500;
    padding-right: 1rem;
}

.think{
    display: flex;
    padding: 1rem 0.5rem;
}

.min-max{
    width: 100%;
    display: flex;
    justify-content: flex-end;
}
.only-one{
    width: 40%;
}

.only-one table{
    border-top: 00.2rem solid #ff6139;
    width: 100%;
}

.only-one table td{
    padding: 0.4rem 0.4rem;
    font-size: 1rem;
}

.Proceed{
    width: 15rem;
    height: rem;
    padding: 0.5rem 1rem;
    color: #ffffff;
    text-decoration: none;
    font-weight: 400;
    background-color: #ff6139;
    border-radius: 1.5rem;
    display: block;
    margin: 0 auto;
    text-align: center;
    margin-top: 1rem;
}


@media only screen and (max-width:700px){
    .only-one{
        width: 100%;
    }

    .min-max{
        width: 100%;
        padding: 1rem;
    }

    .cart{
        padding: 0  0.4rem;
    }

    .com h1{
        display: none;
    }

    .think{
        display: block;
        padding: 1rem 0.5rem;
    }

    .Proceed{
        width: 11rem;
        padding: 0.4rem 0.7rem;
        font-size: 00.8rem;
        font-weight: 400;
        border-radius: 1.5rem;
        display: block;
        margin: 0 auto;
        text-align: center;
        margin-top: 1rem;
    }
}


/* Account */
.operator .bttn{
    width: 5rem;
    height: 2rem;
    border: 0;
    border-radius: 3rem;
    background: none;
    outline: none;
    font-size: 1rem;
    font-weight: 700;
    cursor: pointer;
    margin: 0 0.5rem;
}

.operator{
    width: 50%;
    position: relative;
    padding: 3rem 0 0 2.5rem ;
}

.background{
    background-color: #ffffff;
    max-width: 340px;
    height: 22rem;
    box-shadow: 2px 2px 4px 2px #f4e0e1;
    padding-top: 1rem;
    position: relative;
    overflow: hidden;
}

.buttons{
    width: 100%;
    display: flex;
    justify-content: center;
}
#logform{
    width: 80%;
    display: block;
    margin: 0 auto;
    padding: 4rem 0;
    position: absolute;
    left: -300px;
    transition: 2s;
}

#lname{
    width: 100%;
    border: 0;
    border: 2px solid #ebeaeb;
    padding: 0.1rem 0.5rem;
    outline: none;
}

.thiky{
    color: #ff6139;
    font-size: 00.7rem;
    padding-left: 0.1rem;
}

#lpass{
    width: 100%;
    border: 0;
    border: 2px solid #ebeaeb;
    padding: 0.1rem 0.5rem;
    outline: none;
    margin-top: 1rem;
}

.value{
    width: 100%;
    height: 2rem;
    background: #ff6139;
    border: 0;
    outline: none;
    border-radius: 2rem;
    color: #ffffff;
    margin-top: 2rem;
}

.anchartag{
    text-align: center;
    display: block;
    margin-top: 1rem;
    text-decoration: none;
    color: gray;
    font-size: 1rem;
}

#registerform{
    width: 80%;
    display: block;
    margin: 0 auto;
    padding: 3rem 0 ;
   position: absolute;
   left: 20px;
   transition: 2s;
}

#rname{
    width: 100%;
    border: 0;
    border: 2px solid #ebeaeb;
    padding: 0.1rem 0.5rem;
    outline: none;
}

#remail{
    width: 100%;
    border: 0;
    border: 2px solid #ebeaeb;
    padding: 0.1rem 0.5rem;
    outline: none;
    margin-top: 1rem;
}

#rpass{
    width: 100%;
    border: 0;
    border: 2px solid #ebeaeb;
    padding: 0.1rem 0.5rem;
    outline: none;
    margin-top: 1rem;
}

.remov{
    margin-top: 1rem;
    margin-bottom: 1rem;
}

@media only screen and (max-width:800px){
    .operator{
        width: 100%;
        padding-bottom:4rem;
        padding-left: 0;
    }

    .background{
        display: block;
       margin: 0 auto;
       height: 19rem;
    }
}

@media only screen and (max-width:390px){
    .background{
        max-width: 300px;
        margin: 0 auto;
     }
}