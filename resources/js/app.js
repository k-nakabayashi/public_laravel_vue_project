//下準備
window.Vue = require('vue');
import store from "./store";
import router from './router';

//起動
require('./bootstrap');

//Vueオブジェクト設定
import { mapGetters } from 'vuex';

import page_title from './design/components/tw/bar/page_title.vue';
import following_key from './design/components/tw/bar/following_key.vue';
import main_menu from './design/components/common/main_menu.vue';
Vue.mixin({
    data: function(){ return {
      path_location: "",
      page: "",
      req_token: "",
      req_token_secret: "",
      url_auth_api: "https://api.twitter.com/oauth/authorize?oauth_token=",
      vali_error: {
        
        required : "入力必須項目です。",//required attr
        min8: "8文字以上の文字を入力してください。",//minlength attr
        email: "メール形式で入力してください。",//email attr
        full_letters: "全角で入力してください。",
        half_letters: "半角で入力してください。",
        space: "空白は含めずに入力してください。",
        f_type: "正しいファイルを選択してください。",
        f_size: "ファイルサイズがオーバーしています。",
        //ハッキング対策
        null_byte: "不正な文字が検出されました。",
        xss: "不正なスクリプトが検出されました。",
        regexp_email: new RegExp("^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$"),
        regexp_half: new RegExp("^[a-zA-Z0-9]+$")
      },

      tw_accounts: "",
      tw_return_api_flg: false,
      tw_duplication: false,
    }},
    
    methods: {
      vali_required: function (type, value) {
  
        if (value == "") {
          this.errors[type] = this.vali_error.required;
          return false;
  
        } else {
          delete this.errors[type];
          return true;
        }
      },
      vali_email: function(type,value) {
  
        //メール形式判定
        var result = value.match(this.vali_error.regexp_email);
        if (result == null) {
          this.errors[type] = this.vali_error.email;
          return false;
  
        } else {
          delete this.errors[type];
          return true;
        }
      },
      vali_half: function(type,value) {
  
        var result = value.match(this.vali_error.regexp_half);
        if (result == null) {
          this.errors[type] = this.vali_error.half_letters;
          return false;
  
        } else {
          delete this.errors[type];
          return true;
        }
      },
  
      referback: function () {
        this.$router.back();
      }
    },
    
    computed: {
      ...mapGetters([
      'auth/getAuth_Vuex',
      ]),
      auth_data: function () {
        return store.state.auth.auth_data;
      },
    },
    components: {
      page_title,following_key,
      main_menu,
    },

    created: function () {
      this.path_location = location.pathname;

      switch (this.path_location) {
        case "/home":
          this.page = "アカウントリスト";
          break;
        case "/m_api_account":
          this.page = "アカウント";
          break;
        case "/target_list":
          this.page = "ターゲットアカウントリスト";
          break;
        case "/target":
          this.page = "ターゲットアカウン";
          break;
        case "/follow_key":
          this.page = "フォロワーサーチキーワード";
          break;
        case "/favorite_key":
          this.page = "自動いいねキーワード";
          break;
        default:
          this.$router.push("/");
          break;
      }
      this.req_token =  window.req_token;
      this.req_token_secret =  window.req_token_secret;

      this.$nextTick(function () {
        
        if (window.tw_accounts.tw_return_api_flg === true) {
          this.tw_return_api_flg = window.tw_accounts.tw_return_api_flg;
        }
        if (window.tw_accounts.tw_duplication === true) {
          this.tw_duplication = window.tw_accounts.tw_duplication;
        }
      });
    },
    
    mounted: function () {
      this.$nextTick(function () {
        if (window.tw_accounts.tw_duplication === true) {
          alert("登録済みのアカウントです。");
        }
        
        delete window.tw_accounts.tw_return_api_flg;
        delete window.tw_accounts.tw_duplication;
        this.tw_accounts = window.tw_accounts;
      });
    },
  });
const app = new Vue({
    // el: '#app',
    store,
    router,
    data: {

    },
    created: function()  {
      this.$store.dispatch('auth/actAuth', window.Laravel.auth_data);
      if (this.tw_accounts['duplication'] === true) {
        // delete this.tw_accounts['duplication'];
        
      }
    },
    mounted: function () {

    },
}).$mount("#app");

const common = new Vue({
  // el: '#common',
  store,
  router,
}).$mount("#common");

//jquery
document.addEventListener('DOMContentLoaded', function(){
  require("./jquery_anime/modal");
},false);