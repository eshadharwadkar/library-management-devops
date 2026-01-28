pipeline {
    agent any

    environment {
        IMAGE_NAME = "library-app"
        CONTAINER_NAME = "library-container"
    }

    stages {
        stage('Clone Repo') {
            steps {
                git branch: 'main', url: 'https://github.com/eshadharwadkar/library-management-devops.git'
            }
        }

        stage('Build Docker Image') {
            steps {
                sh 'docker build -t $IMAGE_NAME .'
            }
        }

        stage('Stop Old Container') {
            steps {
                sh 'docker rm -f $CONTAINER_NAME || true'
            }
        }

        stage('Run New Container') {
            steps {
                sh 'docker run -d -p 8085:80 --name $CONTAINER_NAME $IMAGE_NAME'
            }
        }
    }
}
