Vue.component('tasks', {
    template: '#task-template',
    data: function() {
        return {
            list: []
        };
    },
     created: function() {
        this.fetchTaskList();
    },
    methods: {
        deleteTask: function(task) {
            this.list.$remove(task);
        },
        fetchTaskList: function() {
            this.$http.get('/api/tasks').then(function(response) {
            this.list = response.data;
            }.bind(this));
        },
    }
});
new Vue ({
    el:'body'
})
