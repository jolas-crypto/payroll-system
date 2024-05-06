import axios from "axios"
import { HTTP_OK } from "./constant"

export default {
    async save(method, url, payload) {
        let returnResponse = {
            status: HTTP_OK,
            success: true,
            data: {}
        }

        try {
            const response = await axios({
                method, url, data: payload
            })
            returnResponse.data = response.data
            returnResponse.success
            return returnResponse
        } catch (error) {
            returnResponse.success = false
            returnResponse.status = error.response
            returnResponse.data = error.response.data.errors
            return returnResponse
        }
    },

    async update(method, url, payload) {
        let returnResponse = {
            status: HTTP_OK,
            success: true,
            data: {}
        }

        try {
            const response = await axios({
                method, url, data: payload
            })
            returnResponse.data = response.data
            returnResponse.success
            return returnResponse
        } catch (error) {
            returnResponse.success = false
            returnResponse.status = error.response
            returnResponse.data = error.response.data.errors
            return returnResponse
        }
    },

    async delete(method, url) {
        let returnResponse = {
            status: HTTP_OK,
            success: true,
            data: {}
        }

        try {
            const response = await axios({
                method, url
            })
            returnResponse.data = response.data
            returnResponse.success
            return returnResponse
        } catch (error) {
            returnResponse.success = false
            returnResponse.status = error.response
            returnResponse.data = error.response.data.errors
            return returnResponse
        }
    }
}
