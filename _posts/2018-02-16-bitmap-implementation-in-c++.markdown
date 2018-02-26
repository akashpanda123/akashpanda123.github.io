---
layout: post
title:  "Bitmap Implementation in C++"
date:   2018-02-16 22:36:16 +0530
categories: problem implementation
---
Implementing a Bitmap

We need to design a class to implement a bitmap. 
Requirements: 
   A constructor to declare how many bits needed to be stored. 
   Functions to set bit and retrive bit. 
<br/>
<br/>
<a href = "https://www.onlinegdb.com/rJqWqY4Df" target="_blank">Try Here</a>
 
{% highlight ruby %}
#include <iostream>
#include <cmath>

using namespace std;

class Bitmap
{
    int blocks = 0;
    int block_size = sizeof(char) * 8;;
    char *_bitmap;
public:
    Bitmap(int n) {
        int size = ceil(n/block_size);
        _bitmap = (char *)malloc(size);
    }
    
    void set(int n) {
        int block_no = n / block_size;
        int block_offset = n % block_size;
        *(_bitmap + block_no) |= generateNo(block_offset);
    }
    
    int get(int n) {
        int block_no = n / block_size;
        int block_offset = n % block_size;
        int result = (*(_bitmap + block_no) &= generateNo(block_offset))>>(block_offset);
        return result;
    }
    
    int generateNo(int n) {
        return pow(2,n);
    }
};

int main()
{
    Bitmap b(100);
    b.set(61);
    cout << b.get(61);
    return 0;
}
{% endhighlight %}

[jekyll-docs]: https://jekyllrb.com/docs/home
[jekyll-gh]:   https://github.com/jekyll/jekyll
[jekyll-talk]: https://talk.jekyllrb.com/
