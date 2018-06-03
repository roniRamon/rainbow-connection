import DS from 'ember-data';

export default DS.Model.extend({
  fname: DS.attr('string'),
  lname: DS.attr('string'),
  color: DS.attr('string'),
  connection: DS.attr(),

  deleteConnection(connection_id) {
    const modelName = this.constructor.modelName;
    const adapter = this.store.adapterFor(modelName);
    return adapter.deleteConnection(parseInt(this.get('id')), connection_id);
  }
});
