import NotFound from "./pages/404/index";
import Home from "./pages/Home/index";
import Info from "./pages/Info/index";
import Register from "./pages/Register/index";
import RegisterAcknowledge from "./pages/RegisterAcknowledge/index";

export default {
    mode: 'history',

    routes: [
        {
            path: '*',
            name: '404',
            component: NotFound
        },
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/info',
            name: 'info',
            component: Info
        },
        {
            path: '/register',
            name: 'register',
            component: Register
        },
        {
            path: '/register-acknowledge',
            name: 'register-acknowledge',
            component: RegisterAcknowledge
        }
    ]
};
