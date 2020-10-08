<template>
    <div id="app">
        <div v-if="isAdmin">

            <!--========== ADMIN SIDE MENU one ========-->
            <div class="_1side_menu" >
                <div class="_1side_menu_logo">
                  
                </div>
                <!--~~~~~~~~ MENU CONTENT ~~~~~~~~-->
                <div class="_1side_menu_content">
                    <div class="_1side_menu_img_name">
                        <p class="_1side_menu_name">{{authUser.name}}</p>
                    </div>

                    <!--~~~ MENU LIST ~~~~~~-->
                    <div class="_1side_menu_list">
                        <Menu :active-name="activeName" :accordion="true">
                            <MenuItem name="/admin/project_category" :to="'/admin/project_category'">
                                <Icon type="ios-analytics" />Dashboard</MenuItem>
                            <!-- <Submenu name="1">
                                <template slot="title">
                                    <Icon type="ios-menu" /> Photo Stories
                                </template>
                                <MenuItem name="/admin/photo_stories/add_album" :to="'/admin/photo_stories/add_album'">
                                    <Icon type="ios-copy" />Add Album</MenuItem>
                                <MenuItem name="/admin/photo_stories/add_photo" :to="'/admin/photo_stories/add_photo'">
                                    <Icon type="ios-copy" />Add Photo</MenuItem>
                            </Submenu>
                            <Submenu name="2">
                                <template slot="title">
                                    <Icon type="md-contacts" /> Accounts
                                </template>
                                <MenuItem name="/admin/account/social_links" :to="'/admin/account/social_links'">
                                    <Icon type="ios-contact" />social links</MenuItem>
                                <MenuItem name="/admin/account/logo" :to="'/admin/account/logo'">
                                    <Icon type="ios-contact" /> logo</MenuItem>
                            </Submenu>
                            <Submenu name="3">
                                <template slot="title">
                                    <Icon type="ios-leaf" /> Publications
                                </template>
                                <MenuItem name="/admin/publications/add_publication" :to="'/admin/publications/add_publication'">
                                    <Icon type="ios-leaf" />Add Publication</MenuItem>
                            </Submenu>
                            <Submenu name="7">
                                <template slot="title">
                                    <Icon type="ios-leaf" /> Books
                                </template>
                                
                                <MenuItem name="/admin/books/add_book" :to="'/admin/books/add_book'">
                                    <Icon type="ios-leaf" />Add Book</MenuItem> 
                            </Submenu>
                            <Submenu name="4">
                                <template slot="title">
                                    <Icon type="md-jet" /> Biography
                                </template>
                                <MenuItem name="/admin/biography/about" :to="'/admin/biography/about'">
                                    <Icon type="md-jet" />About</MenuItem>
                                <MenuItem name="/admin/biography/interviews" :to="'/admin/biography/interviews'">
                                    <Icon type="md-jet" />Interviews</MenuItem>
                                <MenuItem name="/admin/biography/award" :to="'/admin/biography/award'">
                                    <Icon type="md-jet" />Awards</MenuItem>
                                <MenuItem name="/admin/processing_order" :to="'/admin/processing_order'"><Icon type="md-jet" />processing Orders</MenuItem> -->
                            <!-- </Submenu>
                            <MenuItem name="/admin/contact/contact_info" :to="'/admin/contact/contact_info'">
                                    <Icon type="md-jet" />contact</MenuItem>
                            </Submenu>
                             <MenuItem name="/admin/single_photos/add_singlePhoto" :to="'/admin/single_photos/add_singlePhoto'">
                                    <Icon type="md-jet" />Single Photos</MenuItem>
                            </Submenu> -->
                        </Menu>
                    </div>
                </div>
            </div>
            <!--========== ADMIN SIDE MENU ========-->

            <div class="header">
                <div class="_2menu  _box_shadow">
                    <div class="_2menu_logo">
                        <ul class="open_button">
                            <li>
                                <Icon type="ios-list" />
                            </li>
                            <!--<li><Icon type="ios-albums" /></li>-->
                        </ul>
                    </div>

                    <ul class="_2menu_main_ul_list_ul right_menu">
                        <li >
                            <p><a href="/logout">Logout</a></p>
                            
                        </li>

                    </ul>

                </div>
            </div>
            

            
            <transition name="component-fade" mode="out-in">
                <router-view></router-view>
            </transition>
        </div>
        <div v-else> 
          <transition name="component-fade" mode="out-in">
                <router-view></router-view>
            </transition>
        </div>
    </div>
</template>








<script>
  export default {
      data() {
          return {
                isAdmin: false,
          }
      },
      components: {

      },
       created(){
             this.$store.commit('setAuthuser', (window.authUser))
             this.isAdmin = true
  },

  }
</script>

<style>
.component-fade-enter-active, .component-fade-leave-active {
  transition: opacity .5s ease;
}
.component-fade-enter, .component-fade-leave-to
/* .component-fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}
.right_menu{
    text-align: right;
    width: 100%;
}
</style>










