---
layout: post
title:  "Swapping bits in C++"
date:   2018-02-16 22:36:16 +0530
categories: jekyll update
---

Swapping bits
    We need to implement a function to swap two bits in an integer in an efficient manner.

{% highlight ruby %}
#include <iostream>

using namespace std;

long SwapBits(long x , int i , int j) {
    if(((x>>i)&1) != ((x>>j)&1)) {
        unsigned long bit_mask = (1L << i)|(1L << j);
        x ^= bit_mask;
    }
    return x;
}

int main()
{
    cout << SwapBits(125 , 1 , 3);
    return 0;
}

{% endhighlight %}

[jekyll-docs]: https://jekyllrb.com/docs/home
[jekyll-gh]:   https://github.com/jekyll/jekyll
[jekyll-talk]: https://talk.jekyllrb.com/
