<template>
    <div>
      <div>

     
  		   <!--========== ADMIN SIDE MENU one ========-->
      <div class="_1side_menu">
       <div class="_1side_menu_logo">
          <div class="main_logo">
              <router-link to="/">
                  <!-- <img src="assets/img/logo.jpg" alt="logo"> -->
                  <span>ShahNewaz</span>
                </router-link>
          </div>
          <!--<img src="/img/logo.jpg" style="width: 108px;margin-left: 68px;"/>-->
        </div>

          <!--~~~~~~~~ MENU CONTENT ~~~~~~~~-->
        <div class="_1side_menu_content">
          <div class="_1side_menu_img_name">
            <img class="_1side_menu_img" src="assets/admin_img/admin.jpg" alt="" title="">

            <p class="_1side_menu_name">Admin</p>
          </div>


        </div>
      </div>
        <!--========== ADMIN SIDE MENU ========--> 

        <!--========= HEADER ==========-->
      <div class="header">
        <div class="_2menu  _box_shadow">
          <div class="_2menu_logo">
            <ul class="open_button">
              <li ><Icon type="ios-list" /></li>
              <!--<li><Icon type="ios-albums" /></li>-->
            </ul>
          </div>

           <ul class="_2menu_main_ul_list_ul">
              <li>
                <p>City</p>
              </li> 
              <li>
                <p>Restaurant</p>
              </li>
              <li>
                <p>Food</p>
              </li> 
              <li>
                <p>Reviews</p>
              </li>
            </ul>


        </div>
      </div>
            <!--========= HEADER ==========-->
    	<!-- <router-view/> -->
    </div>
    </div>
</template>



<script>
export default {
   data(){
     return {
        
     }
   },
   created(){
     
   }
}
</script>
