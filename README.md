# Technical Test

### Requirements
* php-7.4
* composer

### Installation
Run "composer install" command to install all dependencies, 
or if you prefer with docker then you need to run the following comments on the root of the project
 * "docker build -f docker/Dockerfile . -t 7graus:v1.0.0"
 * "docker run 7graus:v1.0.0"
 
and the tests will be executed.

### Run tests
To run the tests the following command should be executed "composer tests".

### Other Versions
The proposed version is executed with the master branch.
As proposed on the final of the test, was made a solution to resolve the testability of the code. The solution is executed on the bónus branch.