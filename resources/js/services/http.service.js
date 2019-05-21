import axios from 'axios';
import routes from '../routes';

const http = axios.create();

export const HttpService = {
    getDefaultHeaders() {
        let headers = {
            'content-type': 'application/json',
            'X-API-Key': process.env.VUE_APP_ADMIN_API_KEY
        };

        const token = StorageService.getItem(StorageService.KEYS.ACCESS_TOKEN);

        if (isDefined(token)) {
            headers = {
                ...headers, ...{
                    'Authorization': `Bearer ${token}`
                }
            };
        }

        return headers;
    },

    httpPost(url, data) {
        const headers = this.getDefaultHeaders();

        return http.post(url, data, {headers: headers})
            .then(response => response.data.data)
            .catch(error => this.formatError(error))
    },

    httpPut(url, data) {
        const headers = this.getDefaultHeaders();

        return http.put(url, data, {headers: headers})
            .then(response => response.data.data)
            .catch(error => this.formatError(error))
    },

    httpGet(url, params) {
        const headers = this.getDefaultHeaders();

        return http.get(url, {headers: headers, params: params})
            .then(response => response.data.data)
            .catch(error => this.formatError(error))
    },

    formatError(error) {
        return Promise.reject({
            status: error.response.status,
            data: error.response.data
        });
    }
};

export default HttpService;
