---
layout: post
title:  "Maxumum Profit in Stock Divide and Conquer Solution"
date:   2018-02-24 22:36:16 +0530
categories: problem implementation
---

<strong>Problem:</strong> <br />
Suppose that you been offered the opportunity to invest in the Volatile Chemical Corporation. Like the chemicals the company produces, the stock price of the Volatile Chemical Corporation is rather volatile. You are allowed to buy one unit of stock only one time and then sell it at a later date, buying and selling after the close of trading for the day. To compensate for this restriction, you are allowed to learn what the price of the stock will be in the future. Your goal is to maximize your profit.

<br><br>
Figure shows the price of the stock over a 17-day period.

![My helpful screenshot]({{ "/assets/blog-images/max-subaray-problem-d-and-c.png" | absolute_url }})
<br />
We want to find a sequence of days over which the net change from the first day to the last is maximum. Instead of looking at the daily prices, let us instead consider the daily change in price, where the change on day i is the difference between the prices after day i-1 and after day i.
<br />


A divide and conquer solution is shown here. 

{% highlight ruby %}
#include<iostream>
#include<vector>

using namespace std;

#define MINIMUM_INTEGER -10000

struct LowHighSum
{
    int low;
    int high;
    int sum;
};

struct LowHighSum find_max_subarray_crossing(vector<int> A , int low , int mid , int high) {
    int left_sum = MINIMUM_INTEGER ;
    int sum = 0;
    int max_left;

    for(int i = mid ; i>=low ; i--) {
        sum += A[i];
        if(sum > left_sum) {
            left_sum = sum;
            max_left = i;
        }
    }

    int right_sum = MINIMUM_INTEGER;
    sum = 0;
    int max_right;
    for(int j = mid+1 ; j<=high ; j++) {
        sum += A[j];
        if(sum > right_sum) {
            right_sum = sum;
            max_right = j;
        }
    }
    struct LowHighSum response;
    response.low = max_left;
    response.high = max_right;
    response.sum = left_sum + right_sum;

    return response;

}

struct LowHighSum find_max_subarray(vector<int> A , int low , int high) {
    struct LowHighSum response;
    if(low == high) {
        response.low = low;
        response.high = high;
        response.sum = A[low];
        return response;
    }
    else {
        int mid = low + (high-low)/2;
        struct LowHighSum left = find_max_subarray(A , low , mid);
        struct LowHighSum right = find_max_subarray(A , mid+1 , high);
        struct LowHighSum crossing = find_max_subarray_crossing(A , low , mid , high);

        if(left.sum > max(right.sum , crossing.sum)) {
            return left;
        }
        else if(right.sum > max(left.sum , crossing.sum)) {
            return right;
        }
        else {
            return crossing;
        }
    }
}

int main() {
    vector<int> V;
    V.push_back(13);
    V.push_back(-3);
    V.push_back(-25);
    V.push_back(20);
    V.push_back(-3);
    V.push_back(-16);
    V.push_back(-23);
    V.push_back(18);
    V.push_back(20);
    V.push_back(-7);
    V.push_back(12);
    V.push_back(-5);
    V.push_back(-22);
    V.push_back(15);

    struct LowHighSum response = find_max_subarray(V , 0 , V.size()-1);

    cout << response.low << " " << response.high << " "  << response.sum;

    return 0;
}
{% endhighlight %}

