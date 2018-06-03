import DS from 'ember-data';

export default DS.Model.extend({
  fname: DS.attr('string'),
  lname: DS.attr('string'),
  color: DS.attr('string'),
  connection: DS.attr()
});
