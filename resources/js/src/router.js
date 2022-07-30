import { createRouter, createWebHistory } from "vue-router";

// Lazy Loading [Will load when first called. Then will be stored in cache memory]

// Sub-Components
const SideBar = () => import("./components/dashboard/SideBar.vue");

// Group Parrent
const Page = () => import("./views/dashboard/pages/Page.vue");
const Diet = () => import("./views/dashboard/diet/Diet.vue");
const Article = () => import("./views/dashboard/articles/ArticleGroup.vue");
const Profile = () => import("./views/Profile.vue");

// Auth

const login = () => import("./auth/LoginPage.vue");
const forgot = () => import("./auth/ForgotPassword.vue");
const reset = () => import("./auth/ResetPassword.vue");
const register = () => import("./auth/RegisterPage.vue");
const verifyEmail = () => import("./auth/VerifyEmail.vue");
const confirmPassword = () => import("./auth/ConfirmPassword.vue");

// Views
const index = () => import("./views/index.vue");
const AboutMe = () => import("./views/dashboard/pages/AboutMe.vue");
const AdminDashboard = () => import("./views/dashboard/AdminDashboard.vue");
const AllArticles = () => import("./views/dashboard/articles/AllArticles.vue");
const AllEvents = () => import("./views/dashboard/pages/AllEvents.vue");
const AllRecords = () => import("./views/dashboard/records/AllRecords.vue");
const Appointments = () => import("./views/dashboard/records/Appointments.vue");
const AppointmentSerials = () =>
    import("./views/dashboard/records/AppointmentSerials.vue");
const ArticleCategory = () =>
    import("./views/dashboard/articles/ArticleCategory.vue");
const ChamberDetails = () =>
    import("./views/dashboard/pages/ChamberDetails.vue");

const CreateDiet = () => import("./views/dashboard/diet/CreateDiet.vue");
const CreateSerials = () =>
    import("./views/dashboard/records/CreateSerials.vue");
const DietDrafts = () => import("./views/dashboard/diet/DietDrafts.vue");
const DietRecords = () => import("./views/dashboard/diet/DietRecords.vue");
const DietRequests = () => import("./views/dashboard/diet/DietRequests.vue");
const LiveChat = () => import("./views/dashboard/LiveChat.vue");
const Home = () => import("./views/Home.vue");

const PaymentHistory = () => import("./views/dashboard/PaymentHistory.vue");
const PhotoGallery = () => import("./views/dashboard/pages/PhotoGallery.vue");
const RequestDiet = () => import("./views/dashboard/diet/RequestDiet.vue");

const SocialMedia = () => import("./views/dashboard/pages/SocialMedia.vue");
const WriteArticle = () =>
    import("./views/dashboard/articles/WriteArticle.vue");
const ViewArticle = () => import("./views/dashboard/articles/ViewArticle.vue");
const EditArticle = () => import("./views/dashboard/articles/EditArticle.vue");

const ProfilePage = () => import("./views/dashboard/profile/ProfilePage.vue");
const ProfileSetting = () =>
    import("./views/dashboard/profile/ProfileSetting.vue");

const routes = [
    // {
    //     path: "/reset-password/:token/:email",
    //     component: reset
    // },

    //////////////////////
    {
        path: "/",
        component: index,
        children: [
            {
                path: "",
                name: "home",
                component: Home,
                meta: { role: [0] },
            },
            {
                path: "post/:id",
                name: "post",
                component: ViewArticle,
                meta: { role: [0] },
            },
            {
                path: "login",
                name: "login",
                component: login,
                meta: { role: [0] },
            },
     
            {
                path: "register",
                name: "register",
                component: register,
                meta: { role: [0] },
            },
            {
                path: "verify-email",
                name: "verifyEmail",
                component: verifyEmail,
                meta: { role: [0] },
            },
            {
                path: "confirmPassword",
                name: "confirmPassword",
                component: confirmPassword,
                meta: { role: [0] },
            },

            {
                path: "forgot-password",
                name: "forgot",
                component: forgot,
                meta: { role: [0] },
            },
            {
                path: "reset",
                name: "reset",
                component: reset,
                meta: { role: [0] },
            },

            {
                path: "reset-password/:token/:email",
                component: reset,
                name: "resetToken",
                meta: { role: [0] },
            },
        ],
    },
    {
        path: "/about",
        name: "AboutMe",
        component: AboutMe,
        meta: { role: [1] },
    },
    {
        path: "/admin-dashboard",
        name: "AdminDashboard",
        component: AdminDashboard,
        meta: { role: [1] },
    },

    {
        path: "/all-records",
        name: "AllRecords",
        component: AllRecords,
        meta: { role: [1, 2] },
    },
    {
        path: "/appointments",
        name: "Appointments",
        component: Appointments,
        meta: { role: [1, 2] },
    },
    {
        path: "/appointments-serials",
        name: "AppointmentSerials",
        component: AppointmentSerials,
        meta: { role: [1,2] },
    },

    {
        path: "/create-serials",
        name: "CreateSerials",
        component: CreateSerials,
        meta: { role: [1, 2] },
    },

    {
        path: "/chat",
        name: "LiveChat",
        component: LiveChat,
        meta: { role: [1] },
    },
    {
        path: "/articles",
        name: "article",
        component: Article,
        children: [
            {
                path: "",
                name: "articleRoot",

                redirect: {
                    name: "AllArticles",
                },
                meta: { role: [1, 2] },
            },
            {
                path: "articles/:id",
                name: "ViewArticle",
                component: ViewArticle,
                meta: { role: [1, 2] },
            },
            {
                path: "all-articles",
                name: "AllArticles",
                component: AllArticles,
                meta: { role: [1, 2] },
            },
            {
                path: "write-article",
                name: "WriteArticle",
                component: WriteArticle,
                meta: { role: [1, 2] },
            },
            {
                path: ":id/edit",
                name: "EditArticle",
                component: EditArticle,
                meta: { role: [1, 2] },
            },
            {
                path: "category",
                name: "ArticleCategory",
                component: ArticleCategory,
                meta: { role: [1, 2] },
            },
        ],
    },
    {
        path: "/pages",
        name: "Page",
        component: Page,

        children: [
            {
                path: "",
                name: "pageRoot",

                redirect: {
                    name: "AllEvents",
                },
                meta: { role: [1, 2] },
            },
            {
                path: "chambers",
                name: "ChamberDetails",
                component: ChamberDetails,
                meta: { role: [1, 2] },
            },
            {
                path: "all-events",
                name: "AllEvents",
                component: AllEvents,
                meta: { role: [1, 2] },
            },

            {
                path: "about",
                name: "AboutMe",
                component: AboutMe,
                meta: { role: [1, 2] },
            },

            {
                path: "gallery",
                name: "PhotoGallery",
                component: PhotoGallery,
                meta: { role: [1, 2] },
            },
            {
                path: "social-links",
                name: "SocialMedia",
                component: SocialMedia,
                meta: { role: [1, 2] },
            },
        ],
    },
    {
        path: "/diet",
        name: "diet",
        component: Diet,

        children: [
            {
                path: "",
                name: "dietRoot",

                redirect: {
                    name: "DietRecords",
                },
                meta: { role: [1] },
            },
            {
                path: "create-diet",
                name: "CreateDiet",
                component: CreateDiet,
                meta: { role: [1] },
            },
            {
                path: "diet-drafts",
                name: "DietDrafts",
                component: DietDrafts,
                meta: { role: [1] },
            },
            {
                path: "diet-records",
                name: "DietRecords",
                component: DietRecords,
                meta: { role: [1, 2] },
            },
            {
                path: "diet-requests",
                name: "DietRequests",
                component: DietRequests,
                meta: { role: [1] },
            },
            {
                path: "request-diets",
                name: "RequestDiet",
                component: RequestDiet,
                meta: { role: [3] },
            },
        ],
    },

    {
        path: "/profile",
        name: "index",
        component: Profile,
        children: [
            {
                path: "",
                name: "profileRoot",

                redirect: {
                    name: "MedicalForm",
                },
                meta: { role: [3] },
            },
            {
                path: "user",
                name: "ProfilePage",
                component: ProfilePage,
                meta: { role: [1,2,3] },
            },

            {
                path: "patient-history",
                name: "PaymentHistory",
                component: PaymentHistory,
                meta: { role: [1,2,3] },
            },
            {
                path: "settings",
                name: "ProfileSetting",
                component: ProfileSetting,
                meta: { role: [1,2,3] },
            },
        ],
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});
import VueCookies from "vue-cookies";
// to.meta.role.includes()
const data = $cookies.get("auth");
router.beforeEach((to, form, next) => {
    if ($cookies.get("auth")) {
        if (
            (to.name == "login") ||
            (to.name == "register") ||
            (to.name == "verifyEmail") ||
            (to.name == "confirmPassword") ||
            (to.name == "forgot") ||
            (to.name == "reset") ||
            (to.name == "resetToken")
        ) {
            next("/");
        }
    }

    if (
        to.meta.role.includes(1) |
        to.meta.role.includes(2) |
        to.meta.role.includes(3)
    ) {
        if (!$cookies.get("auth")) {
            next("/login");
        } else if (to.meta.role.includes(1) && (data.role_id = 1)) {
            next();
        } else if (to.meta.role.includes(2) && (data.role_id = 2)) {
            next();
        } else if (to.meta.role.includes(3) && (data.role_id = 3)) {
            next();
        }
     
        
       
    } else {
        next();
    }
});

export default router;
