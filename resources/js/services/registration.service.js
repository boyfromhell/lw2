import HttpService from './http.service';

const RegistrationService = {
    registerUser(registrationData) {
        return HttpService.httpPost(`/api/register`, registrationData);
    },
};

export default RegistrationService;
