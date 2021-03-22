import axios from 'axios'

const axiosInstance = axios.create({
  baseURL: 'http://localhost:7000/api'
})

export const api = {
  get(endpoint) {
    return axiosInstance.get(endpoint)
  },
  post(endpoint, body) {
    return axiosInstance.post(endpoint, body)
  },
  put(endpoint, body) {
    return axiosInstance.put(endpoint, body)
  },
  delete(endpoint) {
    return axiosInstance.delete(endpoint)
  },
  login(body) {
    return axiosInstance.post('/login', body)
  }
}
