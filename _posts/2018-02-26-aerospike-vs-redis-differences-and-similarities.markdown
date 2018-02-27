---
layout: post
title:  "Differences between Aerospike and Redis"
date:   2018-02-26 22:36:16 +0530
categories: applications aerospike
---

<strong>Redis and Aerospike</strong>
<div class="datatable-begin"></div>

Redis    | Aerospike                          
------- | -------------------------------------
High Performance  | High Performance          
Data Structure Store | Generic KeyValue store 
Tuned for in-memory   | Tuned for inmemory
Clusturing in beta | Auto clusturing
Application Sharded | Auto sharding, auto rebalancing

<div class="datatable-end"></div>

ReDiS stands for Remote Dictionary Store. It is many for data structure service. It offers many data structures operations so that we can straight away use it, but Aerospike on the other hand is a generic key value store. We can define user defined functions and it also has many functionalities. 

<strong>High Performace</strong>
<div class="datatable-begin"></div>

Redis    | Aerospike                          
------- | -------------------------------------
Written in c  | Written in c
Tuned for inmemory | Tuned for inmemory/SSD
Single threaded   | Multi-threaded
Multiple instances to exploit multiple cores | Single/Multiple instances to exploit multiple cores. 

<div class="datatable-end"></div>


<strong>Data Store</strong>
<div class="datatable-begin"></div>

Redis    | Aerospike                          
------- | -------------------------------------
Very rich set of data structures and operations   | Supports int, string, map, blob. list . All operations are not predefined. We may require to define or implement our own operations. 
API is data structure centric | API is KeyValue centric
Caller/App should know the Redis node.   | Caller/App need not know the Aerospike Node
2^32 keys per node | 2^160max keys per namespace

<div class="datatable-end"></div>

In redis, it is sharded from Application layer. Application needs to know where is the data. Application needs to know which node you are contacting. But in Aerospike, the whole cluster is one unit and application need now know about details about the cluster. So when we are doing certain operations, we are doing to certain abstract blackbox(which could be multiple set of machines.).


Both are in-memory LRU Cache.
