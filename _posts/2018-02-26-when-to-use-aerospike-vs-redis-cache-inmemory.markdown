---
layout: post
title:  "When to use Aerospike vs Redis"
date:   2018-02-26 22:36:16 +0530
categories: applications redis
---

Redis is an in-memory data structure store known for speed and often used as a cache. Both Redis and Aerospike are open source, however, when applications need persistence or when applications must scale but servers have maxed out of RAM, developers should consider Aerospike, a distributed key-value store that is just as fast or faster than Redis, but scales more simply and with the economics of flash/SSDs.

<strong>Benchmarks</strong>
A benchmark comparing key-value store performance of Aerospike running “out of the box” and Redis with application level sharding – on Amazon Web Services (AWS) – showed that Aerospike is faster than Redis for certain workloads.

![My helpful screenshot]({{ "/assets/blog-images/redis-vs-aerospike.png" | absolute_url }})

<strong>How is aerospike different from other key-value nosql databases?</strong> <br />
If it has to be answered in one word, its <i>"performance"</i>. Aerospike's performance is much better than any clustered-nosql solutions out there. Higher performance per-node means smaller cluster which is lower TCO (Total Cost of Ownership) and maintenance. Aerospike does auto-clustering, auto-sharding, auto-rebalancing (when cluster state changes) most of which needs manual steps in other databases.

I said "clustered" because I dont want to mix redis in that group (though redis custering is in beta). Pure in-memory performance of Aerospike and redis will be comparable. But Redis expects a lot of things to be handled at the application layer like sharding, request redirection etc. Even though redis has a way to persist (snapshot or AOF), it has its own problems as its designed more like an addon. Aerospike is developed natively with persistence in mind. The clustering of redis also involves setting up master slave etc. You may want to take a look at <a href="https://hasgeek.tv/miniconf/2014-redis-miniconf/899-alternatives-to-redis-while-not-compromising-on-its-speed">this talk</a> comparing and contrasting redis vs aerospike.


<strong>Reference:</strong>
<a href="https://www.aerospike.com/when-to-use-aerospike-vs-redis/">https://www.aerospike.com/when-to-use-aerospike-vs-redis/</a>