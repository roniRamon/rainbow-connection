import Route from '@ember/routing/route';
import Ember from 'ember';

export default Route.extend({
  model(params) {
      return this.store.findRecord('user',params.id);
    },
    ajax: Ember.inject.service(),
    actions: {
        deleteConnection($id){
          return this.get('ajax').request(`users/${$id}`, {method: 'DELETE'}).then((res) => {
                        console.log(res);
                    });
      }
    }
});
