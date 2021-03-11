<?php
include ('header.php');


?>
 <canvas class="nokey" style="position: absolute;z-index: 0;width: 100%;"></canvas>
<div class="container pt-5 block">
    <div class='text-center mb-5 title'>
       <h1>Հաճախակի տրվող հարցեր</h1>
     </div>
    <div class="accordion-wrapper ">
        <div class="acc-head card p-3 rounded-0 accord-bg accord-bg">
          Դասընթացներին մասնակցելու համար անհրաժե՞շտ են նախնական գիտելիքներ։
        </div>
         <div class="acc-body rounded-0 accord-bg1">
          Դասընթացներին մասնակցելու համար նախնական գիտելիքներ անհրաժեշտ չեն, սակայն ցանկալի է մի փոքր անգլերենի իմացությունը։
         </div>
      </div>
    <div class="accordion-wrapper">
        <div class="acc-head card p-3 rounded-0 accord-bg">
             Ո՞ւմ համար են նախատեսված դասընթացները։
         </div>
         <div class="acc-body rounded-0 accord-bg1">
              Դասընթացները նախատեսված են ինչպես սկսնակների, այնպես էլ  որոշակի նախնական գիտելիքներ ունեցողների համար։
         </div>
    </div>
    <div class="accordion-wrapper">
           <div class="acc-head card p-3 rounded-0 accord-bg">
              Դուք համակարգիչներ տրամադրու՞մ, եք։
            </div>
            <div class="acc-body rounded-0 accord-bg1">
          Մեր լսարանները տեխնիկապես ապահովված են։Սակայն ցանկության դեպքում կարող եք դասընթացին մասնակցել Ձեր նոթբուքով։
           </div>
    </div>
    <div class="accordion-wrapper">
       <div class="acc-head card p-3 rounded-0 accord-bg">
         Դասընթացի ավարտին հավաստագիր տրամադրու՞մ եք։
        </div>
        <div class="acc-body rounded-0 accord-bg1">
         Դասընթացի ավարտից հետո տրամադրում ենք հավաստագիր՝ համապատասխան որակավորմամբ։
        </div>
    </div>
    <div class="accordion-wrapper">
        <div class="acc-head card p-3 rounded-0 accord-bg">
           Ձեզ մոտ սովորելուց հետո կարո՞ղ եմ ընդունվել աշխատանքի։
        </div>
        <div class="acc-body rounded-0 accord-bg1">
            Դասընթացն ամբողջությամբ ավարտելուց հետո բարձր առաջադիմությամբ ուսանողներին տրվում է պրակտիկայի հնարավորություն, ինչը բարեհաջող անցնելու դեպքում՝ նաև աշխատանքի հնարավորություն մեր  կամ մեր գործընկեր կազմակերպություններում։
        </div>
    </div>
    <div class="accordion-wrapper">
        <div class="acc-head card p-3 rounded-0 accord-bg">
           Դասերն անհատակա՞ն են, թե՞ խմբային։
        </div>
        <div class="acc-body rounded-0 accord-bg1">
            Մեզ մոտ դասերն անցկացվում են թե՛ խմբային, թե՛ անհատական տարբերակներով։
        </div>
    </div>
    <div class="accordion-wrapper">
       <div class="acc-head card p-3 rounded-0 accord-bg">
          Ինչպես կարող եմ գրանցվել ծրագրավորման դասերին։
       </div>
      <div class="acc-body rounded-0 accord-bg1">
          Դասընթացներին կարող եք գրանցվել ինչպես զանգահարելով, այնպես էլ կայքի միջոցով գրանցվելով։
      </div>
    </div>
</div>









  <script type="text/javascript">
      $(document).ready(function(){
  $('.acc-head').click(function(){
    $(this).next().slideToggle(500);
    $(this).toggleClass('active');
  })
})
  </script>


  <!-- Default dropup button -->
<?php
    include ('footer.php');
?>