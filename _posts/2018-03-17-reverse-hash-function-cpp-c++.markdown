---
layout: post
title:  "Reverse Hash in C++"
date:   2018-03-09 07:00:00 +0530
categories: problem implementation
---

Write a hash function so that a string and its reverse get the same return value 

Hash(‘banana’) == hash(‘ananab’) <br />
Hash(‘banana’) == hash(‘banana’) <br />
Hash(‘banana’) != hash(‘banaaa’) <br />

This question has been taken from <a href ="https://careercup.com/question?id=6224106742611968" target="_blank">Career Cup</a>

{% highlight ruby %}
#include<bits/stdc++.h>

using namespace std;

string ReverseHash(string s) {
    string hash_str;
    int first = 0;
    int last = s.length()-1;

    while(first <= last) {
        if(first != last) {
            if(s[first] <= s[last]) {
                hash_str.push_back(s[first]);
                hash_str.push_back(s[last]);
            } else {
                hash_str.push_back(s[last]);
                hash_str.push_back(s[first]);
            }
        } else {
            hash_str.push_back(s[first]);
        }
        first++;
        last--;
    }
    return hash_str;
}

bool alltestcasepass() {
    bool status = true;
    status = status && (ReverseHash("banana") == ReverseHash("ananab"));
    status = status && (ReverseHash("banana") != ReverseHash("banann"));
    status = status && (ReverseHash("banana") == ReverseHash("banana"));
    return status;
}

int main() {
    if(alltestcasepass()) {
        cout << "All test cases passed" << endl;
    } else {
        cout << "Some test cases did not pass" << endl;
    }
}

{% endhighlight %}