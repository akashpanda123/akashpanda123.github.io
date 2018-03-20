---
layout: post
title:  "Graph BFS in C++"
date:   2018-03-09 07:00:00 +0530
categories: cpp graph
---

BFS(Breadth First Search)

{% highlight ruby %}
#include<bits/stdc++.h>

#define MAX_ELEMENTS 100

using namespace std;

class Graph
{
    int numOfElements;
    vector< list<int> > adjList;
public:
    Graph(int n) {
        numOfElements = n;
        adjList = vector< list<int> >(n+1);
    }
    void addEdge(int u , int v) {
        adjList[u].push_back(v);
        adjList[v].push_back(u);
    }
    void bfs(int start) {
        queue<int> q;
        vector<bool> visited = vector<bool>(numOfElements , false);
        q.push(start);
        visited[start] = true;
        while(!q.empty()) {
            int top = q.front();
            cout << top << " " ;
            q.pop();
            for(list<int>::iterator it = adjList[top].begin() ; it != adjList[top].end() ; it++) {
                int element = *it;
                if(visited[element] == false) {
                    q.push(element);
                    visited[element] = true;
                }
            }
        }
    }
};

int main() {
    Graph g(4);
    g.addEdge(1,2);
    g.addEdge(1,4);
    g.addEdge(2,4);
    g.addEdge(2,3);
    g.addEdge(3,4);
    g.bfs(1);
    return 0;
}
{% endhighlight %}