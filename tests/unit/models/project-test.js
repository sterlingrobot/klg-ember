import { moduleForModel, test } from 'ember-qunit';

moduleForModel('project', 'Unit | Model | project', {
  // Specify the other units that are required for this test.
  needs: []
});

test('it exists', function(assert) {
  let model = this.subject();
  // let store = this.store();
  assert.ok(!!model);
});

test('it retrieves a list of projects', function(assert) {
  // let model = this.subject();
  let store = this.store();
  assert.notEqual(store, 0, 'Projects list should be greater than zero');
});
