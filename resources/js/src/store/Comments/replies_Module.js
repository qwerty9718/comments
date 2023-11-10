import axios from "axios";

export const replies_Module = {
    state: () => ({
        // replies: [{id: null, array: []}],
        replies: [],
        list_comment_id: [],
        meta: [],
        links: [],
        page: 1,
        last_page: 1
    }),
    getters: {
        getReplies(state) {
            return state.replies;
        },
        getPageDataReplies(state) {
            return {page: state.page, last_page: state.last_page};
        }

    },
    mutations: {
        setMetaTags(state, data) {
            state.meta = data.meta;
            state.links = data.links;
            state.last_page = state.meta.last_page;
        }
    },
    actions: {

        async getRepliesDB({state, commit, dispatch}, {id}) {
            const push = await dispatch('checkUniqueCommentId',{id:id});
            if (push){
                const response = await axios.get(`/api/reply/${id}?page=${state.page}`);
                state.replies[id] = response.data.data;
            }
        },

       async checkUniqueCommentId({state, commit}, {id}) {
            if (!state.list_comment_id.includes(id)) {
                state.list_comment_id.push(id);
                console.log(state.list_comment_id);
                return true;
            }
            return false;
        }
    },


    namespaced: true
}
