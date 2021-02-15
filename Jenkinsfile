pipeline {
    agent {
         dockerfile {
            filename 'Dockerfile.test'
        }
    }
    stages {
        stage('Test') {
            steps {
                sh 'composer install --ignore-platform-reqs'

            }
        }
 
