const path = require('path');

module.exports = {
  outputDir: path.resolve(__dirname, '../../public'),
  devServer: {
    proxy: {
      '/api': {
        target: 'http://localhost:8000',
        changeOrigin: true
      }
    }
  }
}
