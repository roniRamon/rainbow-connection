import Route from '@ember/routing/route';

export default Route.extend({
  model(params) {
      return this.store.findRecord('user',params.id);
    },

    actions: {
        deleteConnection(userId, friendId){
          this.get('ajax').request(`users/${friendId}`, {
            method: 'DELETE',
            data: { userId: userId},
          }).then(() => {});
        },
      }
});
