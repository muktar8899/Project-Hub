<template>
    <div class="container-fluid"  >
         <!-- Start Nav Section -->
         <div class="navbar-area">
            <div class="container">
               <div class="navbar-content">
                  <div class="logo-name">
                     <h1>MU-<span>Hub</span></h1> 
                  </div>
                  <div class="nav-list">
                     <div class="search">
                        <nav class="navbar navbar-light">
                           <form class="form-inline">
                              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                              <button class="search_btn btn" type="submit">Search</button>
                           </form>
                        </nav>
                     </div>
                  </div>
                  <div class="login-reg-button">
                      <template v-if="isLoggedIn">
                           <li class="_rel _ipad_no" id="logFocusZ">
                           <div class="menu_pro _dis_flex"  @click="isLoginMenu =(isLoginMenu == true)? false : true " >
                              <div class="_1menu_icon_all">
                                 <p class="menu_name">
                                 <span style="font-weight: bold;">{{authUser.name}}</span></p>
                              </div>
                           </div>
                           <!-- Pro Dropdown -->
                           <div class="_pro_drop"  id="_2loginZ"  v-if="isLoginMenu">
                              <ul class="_pro_drop_list">
                                 <!--<li><router-link :to="{path:'/user_account'}"><i class="fas fa-user-alt"></i><span>My Account</span></router-link></li>-->
                                 <template v-if=" authUser.user_type=='User'">
                                    <li><router-link :to="{name:'user_account',params:{id:authUser.id}}"><i class="fas fa-user-alt"></i><span>My Account</span></router-link></li>
                                 </template>
                                 <template v-if=" authUser.user_type=='Admin'">
                                    <li>
                                       <i class="fas fa-user-alt"></i><span>Admin</span>
                                    
                                    </li>
                                 </template>
                                 <li><a href="/logout"><i class="fas fa-sign-out-alt"></i><span>signOut</span></a></li>
                              </ul>
                           </div>
                           <!-- Pro Dropdown -->
                        </li>
                           <!-- <li class="nav-item">
                              <a href="/logout"  class="nav-link" >Logout</a>
                        </li>
                        <li class="nav-item nav-link">
                              {{authUser.name}}
                        </li> -->
                     </template>
                     <template v-else>
                       <a href="/login"><button type="button" class="common_btn btn">Login</button></a>
                        <a href="/register"><button type="button" class="common_btn btn">Registration</button></a>
                     </template>
                  </div>
               </div>
            </div>
         </div>
      <!-- End Nav Section -->
      </div>
</template>
<script>
export default {

     data(){
        return{
           isLoginMenu:false
        }
     }

}
</script>
<style>
    .menu_right{
        width: 100%;
         
         justify-content: flex-end;
    }
</style>