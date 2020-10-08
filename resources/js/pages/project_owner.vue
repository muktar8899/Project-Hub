<template>
   <div>
      <div class="project-owner-area">
          <div class="container-fluid">
              <div class="project-content">
                  <div class="row">
                    <div class="col-2">
                        <div class="project-content-sidebar">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">over view</a>
                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Add Project</a>
                                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Add Team member</a>
                                <a class="nav-link" id="v-pills-notify-tab" data-toggle="pill" href="#v-pills-notify" role="tab" aria-controls="v-pills-notify" aria-selected="false">Notification</a>
                                <a class="nav-link" id="v-pills-rating-tab" data-toggle="pill" href="#v-pills-rating" role="tab" aria-controls="v-pills-rating" aria-selected="false">Rating</a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Setting</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            
                            <div class="notify-content">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">S/I</th>
                                                <th scope="col">Project Title</th>
                                                <th scope="col">Project Link</th>
                                                <th scope="col">action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>admin@gmail.com</td>
                                                <td>
                                                    <Button>Approve</Button>
                                                     <Button type="primary" @click="modal6 = true">View</Button>
                                                      <Modal
                                                        v-model="modal6"
                                                        title="Project Details"
                                                        :loading="loading"
                                                        @on-ok="asyncOK">
                                                        <div class="project-details-show">
                                                             <ul>
                                                                <li>Project Name <span>Online vent management</span></li>
                                                                <li>Project Category <span>web</span></li>
                                                                <li>Project Description <span>Online vent management</span></li>
                                                                <li>Project features <span>Online vent management</span></li>
                                                                <li>Project use editor <span>Online vent management</span></li>
                                                                <li>Project Image/Screenshoot <span>Online vent management</span></li>
                                                            </ul>
                                                        </div>  
                                                    </Modal>
                                                    <!-- <Button>pendding</Button> -->
                                                </td>
                                            </tr>
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <div class="add-project-form">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label for="inputEmail4">Project Title</label>
                                            <input type="email" class="form-control" id="inputEmail4" placeholder="Project Title">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState">project category</label>
                                                <select id="inputState" class="form-control">
                                                    <option>ecommerce</option>
                                                    <option>app</option>
                                                    <option>web</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">project description</label>
                                                 <!-- <div v-html="form_data.name"></div> -->
                                                    <vue-editor/>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">project features</label>
                                                 <!-- <div v-html="form_data.name"></div> -->
                                                    <vue-editor/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress">Project Technology</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="Technology-html,css etc">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress2">use Editor</label>
                                            <input type="text" class="form-control" id="inputAddress2" placeholder="Editor - Notepad++">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress2">project github/drive link</label>
                                            <input type="text" class="form-control" id="inputAddress2" placeholder="Editor - Notepad++">
                                        </div>
                                        <div class="form-group">
                                             <label for="inputAddress2">project Image/Screenshoot</label>
                                            <Upload
                                                multiple
                                                type="drag"
                                                >
                                                <div style="padding: 20px 0">
                                                    <Icon type="ios-cloud-upload" size="52" style="color: #3399ff"></Icon>
                                                    <p>Click or drag files here to upload</p>
                                                </div>
                                            </Upload>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <div class="add-member-form">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Name</label>
                                                <input type="email" class="form-control" id="inputEmail4" placeholder="Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">Id</label>
                                                <input type="text" class="form-control" id="inputPassword4" placeholder="161-115-136">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">Image</label>
                                                <Upload
                                                    multiple
                                                    type="drag"
                                                    >
                                                    <div style="padding: 20px 0">
                                                        <Icon type="ios-cloud-upload" size="52" style="color: #3399ff"></Icon>
                                                        <p>Click or drag files here to upload</p>
                                                    </div>
                                                </Upload>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Add Member</button>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-notify" role="tabpanel" aria-labelledby="v-pills-notify-tab">
                                <div class="notify-content">
                                    <h3>request for source code(4)</h3>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">S/I</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>admin@gmail.com</td>
                                                <td>
                                                    <Button>send</Button>
                                                    <Button>unsend</Button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Mark</td>
                                                <td>admin@gmail.com</td>
                                                <td>
                                                    <Button>send</Button>
                                                    <Button>unsend</Button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-rating" role="tabpanel" aria-labelledby="v-pills-rating-tab">
                                <div class="rating">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">S/I</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Rating</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>admin@gmail.com</td>
                                                <td>4</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Mark</td>
                                                <td>admin@gmail.com</td>
                                                <td>4</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> 
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <div class="changepassword-content">
                                    <h3 class="account_info_title">Change Password</h3>
                                        <form>
                                           <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label> Name</label>
                                                    <input type="text"  class="form-control" placeholder="User Name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Email Address</label>
                                                    <input class="form-control" type="email" placeholder="Email" />
                                                </div>
                                                <div class="_account_info_button">
                                                    <Button type="success" class="_1card_btn">Save</Button>
                                                </div>
                                            </div>
                                        </form> 
                                        <div class="_account_info_chackbox">
                                            <input v-model="changePasword"  type="checkbox" name="vehicle" :value="true"> Change Password
                                        </div>
                                        <template v-if="changePasword">
                                            <div class="changePasword">
                                                <form>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label>Current Password</label>                                           
                                                            <input class="form-control" type="password" placeholder="Type Password"/>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="_account_info_label">New Password <span>*</span></label>

                                                            <input class="form-control"  type="password" placeholder="Type New Password"/>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label class="_account_info_label">Confirm Password <span>*</span></label>

                                                            <input class="form-control"  type="password" placeholder="Type Confirm Password"/>
                                                        </div>
                                                        <div class="col-12 col-md-12 col-lg-6 _mar_b20">
                                                            <div class="_account_info_button">
                                                                <Button type="success" class="_1card_btn">Save</Button>
                                                            </div>
                                                        </div>	
                                                    </div>
                                                </form>
                                            </div>
                                        </template>
                                    </div>
                            </div>
                        </div>
                    </div>
                    </div>
              </div>
          </div>
      </div>
   </div>
</template>
<script>
import { VueEditor } from "vue2-editor";
export default {
    data(){
		return{
            changePasword:false,
             modal6: false,
            loading: true
		}
	},
      components: {
        VueEditor 
  },
    methods:{
       asyncOK () {
                setTimeout(() => {
                    this.modal6 = false;
                }, 2000);
            }
    },

    async created(){

	},
}
</script>