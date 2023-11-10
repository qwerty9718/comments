import axios from "axios";

export const comments_Module = {
    state: () => ({
        comments: [],
        meta:[],
        links:[],
        page: 1,
        last_page: 1
    }),
    getters: {
        getComments(state){
            return state.comments;
        },
        getPageData(state){
            return {page: state.page, last_page: state.last_page};
        }

    },
    mutations: {
        setMetaTags(state, data){
            state.meta = data.meta;
            state.links = data.links;
            state.last_page = state.meta.last_page;
        }
    },
    actions: {

        // Получаем Комменты из БД
        async getCommentsDB({state, commit}){
            const response = await axios.get(`/api/comment/?page=${state.page}`);
            state.comments = response.data.data;
            // Мета теги
            commit('setMetaTags',response.data);
        },

        // Подгружаем новые комменты
        async loadMoreComments({state, commit}){
            if (state.page < state.last_page){
                state.page++;
                const response = await axios.get(`/api/comment/?page=${state.page}`);
                state.comments.push(...response.data.data);
                commit('setMetaTags',response.data);
            }
        },

        async getRepliesDB({state, commit},{id}){
            const response = await axios.get(`/api/reply/${id}`);
            console.log(response.data);
        }


    },


    namespaced: true
}
