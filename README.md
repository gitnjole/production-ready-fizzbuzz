# Production Ready FizzBuzz

Welcome to the Production Ready FizzBuzz project! This is a fun side project where I aim to implement the classic FizzBuzz problem in a simple and straightforward manner, but with a twist. Instead of stopping at a basic solution, I will continuously complicate the codebase by incorporating various design patterns, making it unnecessarily complex yet "production-ready."

Be sure to check out the blog where I describe the ideas and implementations in detail, this is simply the repository for that blog,which can be found here ['Production-ready-fizzbuzz'](https://gitnjole.github.io/blog/category/fizzbuzz/)

# Introduction

Imagine a problem set before you:

Given an array array, your task is to return a string array called answer (1-indexed) where:

`answer[i]` is "FizzBuzz" if `i` is divisible by both 3 and 5.
`answer[i]` is "Fizz" if `i` is divisible by 3.
`answer[i]` is "Buzz" if `i` is divisible by 5.
`answer[i]` is the string representation of `i` if none of the above conditions are met.
Consider these examples:

Example 1:
```bash
Input: $array = range(1,3)
Output: ["1","2","Fizz"]
```
Example 2:
```bash
Input: $array = range(1,5)
Output: ["1","2","Fizz","4","Buzz"]
```
Example 3:
```bash
Input: $array = range(1,15)
Output: ["1","2","Fizz","4","Buzz","Fizz","7","8","Fizz","Buzz","11","Fizz","13","14","FizzBuzz"]
```
Constraints:

1 <= `n` <= 10^4


While traditionally a straightforward exercise, our goal here is to introduce unnecessary complexity by implementing various design patterns in each chapter of the project.

# Getting Started
To get started with the Production Ready FizzBuzz project, simply clone this repository:

```bash
git clone https://github.com/your-username/production-ready-fizzbuzz.git
```

Ensure you have your PHP environment set up to run the code. While the source code is written in PHP, if you decide to translate it into other languages, additional dependencies or setup instructions will be provided in their respective README files. Additionally, similar code for other languages may be added in the future.

# Chapters

Taken from ['Production-ready-fizzbuzz'](https://gitnjole.github.io/blog/category/fizzbuzz/)

1. Chapter 1 - The Simple Solution
- Introduces a basic working solution to the FizzBuzz problem.

2. Chapter 1.5 - Object-Oriented Approach
- Converts the simple solution into an object-oriented design.

3. Chapter 2 - Introducing Flyweight Design Pattern
- Adds the Flyweight design pattern to the solution.

Each chapter builds upon the previous one, adding complexity through the integration of various design patterns. Feel free to explore each chapter to understand the evolution of the codebase. Upon completion I will transfer the 'simple' starting solution and the final code to the root directory for ease of access.
