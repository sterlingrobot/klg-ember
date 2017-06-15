import DS from 'ember-data';

export default DS.JSONAPIAdapter.extend({
    // namespace: 'api',
    host: 'http://klg-dev.local/api'
});
