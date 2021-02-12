pipeline {
    agent { 
         dockerfile {
            filename 'Dockerfile.test'
        }
    }
    stages {
        stage('install') {
            steps {
                sh 'composer install --ignore-platform-reqs'
            }
        }
        stage('unitTest') {
            steps {
                sh './vendor/bin/phpunit tests/Unit'
            }
        }
        
    }
    post {
        always {
            archiveArtifacts artifacts: 'vendor/', fingerprint: true
        }
    }
}
