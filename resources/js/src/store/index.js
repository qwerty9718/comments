import {createStore} from "vuex";

import {firs_Module} from "@/src/store/firs_Module.js";
import {user_Module} from "@/src/store/User/user_Module.js";
import {login_register_Module} from "@/src/store/User/login_register_Module.js";
import {content_Module} from "@/src/store/Content/content_Module.js";
import {lang_Module} from "@/src/store/Language/lang_Module.js";
import {comments_Module} from "@/src/store/Comments/comments_Module.js";
import {replies_Module} from "@/src/store/Comments/replies_Module.js";


export default createStore({
    modules: {
        firs: firs_Module,
        user_module: user_Module,
        login_register_module: login_register_Module,
        lang_module: lang_Module,

        content_module: content_Module,
        comments_module: comments_Module,
        replies_Module: replies_Module


    }
});
