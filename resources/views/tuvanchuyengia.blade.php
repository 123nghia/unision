
@php
     $dataChuyengia =  session('chuyengiatuvan', []);
     $linkimage = "https://soida-api.placentor.com.vn/public/image_plugin/";
    
  
@endphp
<style>
    /* bannerTuVan.jpg */
    .form1{
       
    }
    .tuvanform1 {
     
        border-radius: 25px;

        max-width: 380px !important;
       
        background-position: center;
    /* background-size: 100% 100%; */

    }

    .title_nav-tuvan {
        text-align: center;
        


    }
    .bottom-button img {
        width: 30px;
    }
    .body-tu-van {

        /* margin-top: 61px; */
    }
   
    .title_nav-tuvan  

    {
       
   }
   .title_nav-tuvan p {
    font-size: 15px;
    color:  rgb(252, 22, 35);


    /* -webkit-text-stroke: 0.05px  rgb(252, 22, 35); */
    font-weight: bold;
   }
   .bottom-button {
    width: 100%;
    text-align: center;
    font-size: 13px;
    margin: auto;
    margin-top: 10px;
    margin-bottom: 10px;
   }
   .bottom-button a:hover {
    opacity: 0.7;
   }
   .bottom-button a {


    height: 30px;
    display: flex;
    background-color: #9946e8;
    border-radius: 10px;
    color: #ffffff;
    font-size: 13px;

   }
   .zalobac {
    background-color: #1272e8 !important;
   }
   .bottom-button a span {
     color: #ffffff;
     text-align: center;
     margin: auto;
   }
   .des-introduction{
    text-align: center;
    color:  rgb(2, 52, 157);
    /* -webkit-text-stroke: 0.01px  rgb(241, 163, 173); */
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
   }
   .des-title{
    text-align: center;
    color:  rgb(2, 52, 157);
    /* -webkit-text-stroke: 0.6px   rgb(2, 52, 157); */
    /* font-size:22px; */
    font-weight: 600;
    /* margin-top: 58px; */
    
   }
   .des-price{
    text-align: center;
    color: rgb(247, 27, 41);
    font-size: 22px;
    font-weight: 600;
    /* -webkit-text-stroke: 0.05px rgb(247, 27, 41); */
    margin-bottom: 15px;
    margin-top: 15px;
   }
   .des-register{
    margin: ạuto;
    margin-bottom: 20px;
   
    border-radius: 10px;
    width: 100%;
    text-align: center;
    color:  rgb(250,251,254);
    font-size:17px;
    font-weight: bold;
   }
   .des-register a {
    width: max-content;
    background-color:  rgb(20, 88, 223);
    color:#ffffff;
    
    margin: auto;
border-radius:30px;
   }
   .des-register a {
    width: max-content;
    padding: 5px 14px;
   
 


   }
   .des-register img {
    width:20px;
  
 


   }
   .des-register a:hover {
    text-decoration: none;
    color:  rgb(250,251,254 )!important;
    opacity: 0.7;


   }
   .number {
    background-color: black;
    color: #ffffff;
    width: 26px;
    border-radius: 50%;
    text-align: center;
   }
   .tuvanchuyengia2 {
    width: 800px !important; 
   }
   .dataList {
    position: relative;
    display: inline-flex;
    flex-wrap: wrap;
    width: 100%;

   }
   .item-doctor img  {
    border-radius: 50%;
   } 


   .item-doctor .desName {
    text-align: center;
    font-weight: bold;
    color: #0b5963 !important;
    padding: 10px;

    font-size: 14px;
   }
   .item-doctor a {
    background-color: #0b5963;
    padding: 6px 8px;
    color: #fff !important;
    border-radius: 5px;
   }
   .item-doctor .desTitle {
    text-align: center;
    font-weight: 500;
    color: #126670 !important;
    font-size: 13px;
    margin-bottom: 10px !important;
   }
   .imageContainer{

    height: 200px;
    background: #eee;
    text-align: center;
    line-height: 200px;
   }

   .imageContainer img {
    vertical-align: middle;
    max-height: 200px;
    max-width: 100%;

}
.item-doctor {
    text-align: center;
    width:30%;
    padding-left: 1%;
    padding-right: 1%;

    padding-bottom: 10px;
}


​
</style>

<script>    


</script>
<div class="status-modal-account tuvanchuyengia " >
    
    <div class="modal-information form1 ">
        <div class="tuvanchuyengia2 form-information-user  " id="formTuVan" style="
        padding: 8px !important;
    ">
            

            <div class="position-close2 position-close3" onclick="changeFormTuvan()">
               <span class ="number" id ="numberText" >X </span>
            </div>

            <div class="position-close2 position-close3" id ="closeButton" style ="display:none" onclick="changeFormTuvan()">
                <svg viewBox="0 0 24 24" size="24" class="sc-11csm01-0 fivNSm">
                    <path
                        d="M14.8284 12L19.4142 16.5858C20.1953 17.3668 20.1953 18.6332 19.4142 19.4142
                            C18.6332 20.1953 17.3668 20.1953 16.5858 19.4142L12 14.8284L7.41421 19.4142
                            C6.63317 20.1953 5.36684 20.1953 4.58579 19.4142C3.80474 18.6332 3.80474 17.3668 4.58579 16.5858L9.17157 12
                            L4.58579 7.41421C3.80474 6.63317 3.80474 5.36684 4.58579 4.58579
                            C5.36684 3.80474 6.63317 3.80474 7.41421 4.58579L12 9.17157L16.5858 4.58579
                            C17.3668 3.80474 18.6332 3.80474 19.4142 4.58579C20.1953 5.36684 20.1953 6.63317 19.4142 7.41421L14.8284 12Z"
                        transform=""></path>
                </svg>
            </div>
           
            <div class="status__isLogin body-tu-van" >
            </br>
            </br>
                     <h2 style="
                    text-align: center;
                    ">Trao đổi với chuyên gia của chung tôi qua Zalo</h2>
                    <div class ="dataList">
                       @foreach  ( $dataChuyengia as $itemchuyengia  )

                        <div class ="item-doctor"> 
                                <div class ="imageContainer">
                                <img src =" {{ $linkimage.$itemchuyengia->image_link}}">
                                </div>
                                <p class ="desName">   {{$itemchuyengia->name}} </p>
                                <p class="desTitle"> 

                                    {{$itemchuyengia->description}}
                                </p>

                                <a href = "{{$itemchuyengia->linkdetail}}"  target="_blank">Trao đổi</a>
                            </div>

                       @endforeach
                     
                    </div>
                 
                  
             
                  
               
                 
                    </br>
            </br>


                    

                   
            </div>

        
        </div>
    </div>
</div>






<script>
    function changeFormTuvan(){
        $('.status-modal-account').hide();
    }
    function openchuyengia()
    {
        $(".tuvanchuyengia").show();
    }
</script>