import DS from 'ember-data';

export default DS.Model.extend({

    name : DS.attr('string'),
    description: DS.attr('string'),
    role: DS.attr('string'),
    "date_completed": DS.attr('date'),
    employer: DS.attr('string'),
    status: DS.attr('string')

});
