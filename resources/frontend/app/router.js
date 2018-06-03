import EmberRouter from '@ember/routing/router';
import config from './config/environment';

const Router = EmberRouter.extend({
  location: config.locationType,
  rootURL: config.rootURL
});

Router.map(function() {
  //client side routes
  this.route('show', { path: '/:id' });
  this.route('user', { path: '/' });

});

export default Router;
